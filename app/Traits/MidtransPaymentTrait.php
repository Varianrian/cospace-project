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
        $tax = $workspaceRoom->price * 10 / 100;
        $totalPrice = $workspaceRoom->price + $tax;
        return [
            'transaction_details' => [
                'order_id' => $this->generateOrderId(),
                'gross_amount' => $totalPrice,
            ],
            'item_details' => [
                [
                    'id' => $workspaceRoom->id,
                    'price' => $workspaceRoom->price,
                    'quantity' => '1',
                    'name' => $workspaceRoom->name,
                ],
                [
                    'id' => 'TAX',
                    'price' => $tax,
                    'quantity' => '1',
                    'name' => 'TAX 10%',
                ]
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
        ];
    }
}
