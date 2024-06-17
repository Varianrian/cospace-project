<?php

namespace App\Http\Controllers;

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

    public function charge(Request $request): JsonResponse
    {
        $request->validate([
            'workspace_room_id' => 'required|exists:workspace_rooms,id',
            'user_id' => 'required|exists:users,id'
        ]);

        /** @var User $user */
        // $user = auth()->user();

        // if ($user === null) {
        //     return new JsonResponse([
        //         'status' => 'error',
        //         'message' => 'User not found'
        //     ], 404);
        // }
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

        try {
            Payment::create([
                'id' => $payloads['transaction_details']['order_id'],
                'user_id' => $user->id,
                'workspace_room_id' => $workspaceRoom->id,
                'token' => $responseBody->token,
                'total_amount' => $workspaceRoom->price,
                'status' => Payment::PAYMENT_STATUS_STARTED
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
