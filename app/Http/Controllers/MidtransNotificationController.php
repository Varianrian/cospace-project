<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Requests\MidtransNotificationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;

class MidtransNotificationController extends Controller
{
    public function notification(MidtransNotificationRequest $request): JsonResponse
    {
        //Validate Transaction Status
        /** @var Payment $payment */
        $payment = Payment::findOrFail($request->order_id);

        if ($payment->transaction_status === Payment::MIDTRANS_STATUS_SETTLEMENT || $payment->transaction_status === Payment::MIDTRANS_STATUS_EXPIRE || $payment->transaction_status === Payment::MIDTRANS_STATUS_DENY || $payment->transaction_status === Payment::MIDTRANS_STATUS_CANCEL || $payment->transaction_status === $request->transaction_status) {
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Payment status is already updated'
            ]);
        }

        DB::beginTransaction();
        try {
            $this->updatePaymentStatus($request, $payment);
            DB::commit();
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Payment status is updated successfully'
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    protected function updatePaymentStatus(Request $notification, Payment $payment): void
    {
        $payment->update([
            'transaction_id' => $notification->transaction_id,
            'status' => Payment::getPaymentStatus($notification->transaction_status),
            'transaction_status' => $notification->transaction_status,
            'payment_type' => $notification->payment_type,
            'payment_channel' => $this->getPaymentChannel($notification),
            'transaction_time' => Carbon::parse($notification->transaction_time),
        ]);
    }


    protected function getPaymentChannel(Request $notification): string
    {
        $paymentChannel = $notification->payment_type;

        if ($notification->payment_type === Payment::PAYMENT_TYPE_CREDIT_CARD) {
            $paymentChannel = $notification->bank; // Valid values are: mandiri, bni, cimb, bca, maybank, and bri.
        }

        if ($notification->payment_type === Payment::PAYMENT_TYPE_BANK_TRANSFER) {
            if (isset($notification->va_numbers[0]['bank']))
                $paymentChannel = $notification->va_numbers[0]['bank']; // Valid values are: bca, bni, bri
            else if (isset($notification->permata_va_number)) // Permata Bank Only
                $paymentChannel = 'permata';
            else
                $paymentChannel = 'other';
        }

        if ($notification->payment_type === Payment::PAYMENT_TYPE_QRIS) {
            $paymentChannel = isset($notification->issuer) ? $notification->issuer : Payment::PAYMENT_TYPE_QRIS;
        }

        return $paymentChannel;
    }
}
