<?php

namespace App\Traits;

use App\Models\WorkspaceRoom;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Subscription;
use App\Models\UserProfile;

trait MidtransPaymentTrait
{
    public function generateOrderId(): string
    {
        return 'INV-' . Carbon::today()->year . Carbon::today()->month . Carbon::today()->day . rand(1000, 9999);
    }

    public function generateUserId(User $user): string
    {
        return 'customer-testing123' . $user->id;
    }

    public function generateSnapTransactionPayloads(User $user, WorkspaceRoom $workspaceRoom)
    {
        $totalAmount = $workspaceRoom->price;

        return [
            'transaction_details' => [
                'order_id' => $this->generateOrderId(),
                'gross_amount' => $totalAmount,
            ],
            // 'user_id' => $this->generateUserId($user),
            'credit_card' => [
                'secure' => true,
                'save_card' => true
            ],
            'item_details' => [
                [
                    'id' => $workspaceRoom->id,
                    'price' => $totalAmount,
                    'quantity' => '1',
                    'name' => $workspaceRoom->name,
                ]
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
        ];
    }
}
