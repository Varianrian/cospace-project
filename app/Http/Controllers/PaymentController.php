<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentChargeRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Models\Payment;
use App\Traits\MidtransPaymentTrait;
use App\Models\User;
use App\Models\WorkspaceRoom;
use App\Services\Midtrans;

class PaymentController extends Controller
{
    public function payment(WorkspaceRoom $workspaceRoom)
    {
        return view('pages.payment', [
            'room' => $workspaceRoom,
            'workspace' => $workspaceRoom->workspace,
            'start_date' => now()->format('Y-m-d'),
        ]);
    }

    use MidtransPaymentTrait;

    public function charge(PaymentChargeRequest $request): JsonResponse
    {
        $user = User::find($request->user_id);

        /** @var WorkspaceRoom $workspaceRoom */
        $workspaceRoom = WorkspaceRoom::find($request->workspace_room_id);

        $payloads = $this->generateSnapTransactionPayloads($user, $workspaceRoom);

        // Set blanket expiry (both page and payment expiry) on sandbox mode for testing
        if (!config('midtrans.is_production')) {
            $payloads['expiry'] = [
                'start_time' => now()->format('Y-m-d H:i:s O'),
                'duration' => config('midtrans.snap_expiration_duration'),
                'unit' => 'minute'
            ];
        }

        $snapUrl = config('midtrans.is_production') ? config('midtrans.snap_production_base_url') : config('midtrans.snap_sandbox_base_url');

        try {
            $response = Midtrans::post(
                $snapUrl . '/transactions',
                config('midtrans.server_key'),
                $payloads
            );
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }

        $responseCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody()->getContents());
        $responseBody->order_id = $payloads['transaction_details']['order_id'];

        $duration = Carbon::parse($request->end_time)->diffInMinutes(Carbon::parse($request->start_time));

        try {
            Payment::create([
                'id' => $payloads['transaction_details']['order_id'],
                'user_id' => $user->id,
                'workspace_room_id' => $workspaceRoom->id,
                'token' => $responseBody->token,
                'total_amount' => $workspaceRoom->price,
                'status' => Payment::PAYMENT_STATUS_STARTED,
                'check_in' => Carbon::parse($request->date . ' ' . $request->start_time),
                'check_out' => Carbon::parse($request->date . ' ' . $request->end_time),
                'booking_date' => Carbon::parse($request->date),
                'duration' => $duration,
            ]);

            return new JsonResponse([
                'code' => $responseCode,
                'status' => 'success',
                'message' => 'Transaction is created successfully',
                'data' => $responseBody
            ], $responseCode);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

}
