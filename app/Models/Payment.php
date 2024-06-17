<?php

namespace App\Models;

use App\Models\User;
use App\Models\WorkspaceRoom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    const PAYMENT_STATUS_STARTED = 'started'; // Payment started but not yet choosen payment method
    const PAYMENT_STATUS_PENDING = 'pending';
    const PAYMENT_STATUS_SUCCESS = 'success';
    const PAYMENT_STATUS_FAILED = 'failed';

    const MIDTRANS_STATUS_PENDING = 'pending';
    const MIDTRANS_STATUS_SETTLEMENT = 'settlement';
    const MIDTRANS_STATUS_CAPTURE = 'capture';
    const MIDTRANS_STATUS_DENY = 'deny';
    const MIDTRANS_STATUS_CANCEL = 'cancel';
    const MIDTRANS_STATUS_EXPIRE = 'expire';

    const PAYMENT_TYPE_CREDIT_CARD = 'credit_card';
    const PAYMENT_TYPE_BANK_TRANSFER = 'bank_transfer';
    const PAYMENT_TYPE_QRIS = 'qris';


    protected $primaryKey = 'id';
    protected $keyType = 'string';


    /**
     * The attributes that should be mutated to dates.
     *
     * @var string[]
     */
    protected $casts = [
        'transaction_time' => 'datetime',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'workspace_room_id',
        'transaction_id',
        'status',
        'token',
        'payment_type',
        'payment_channel',
        'total_amount',
        'transaction_status',
        'transaction_time',
        'check_in',
        'check_out',
        'duration',
        'booking_date',
    ];

    /**
     * Model relationship definition.
     * Payment belongs to User
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Model relationship definition.
     * Payment belongs to WorkspaceRoom
     *
     * @return BelongsTo
     */
    public function workspaceRoom(): BelongsTo
    {
        return $this->belongsTo(WorkspaceRoom::class);
    }

    public function getRouteKey()
    {
        return $this->id;
    }

    /**
     * Map Midtrans Payment Status to Payment Status
     */
    public static function getPaymentStatus(string $transactionStatus): string
    {
        return match ($transactionStatus) {
            self::MIDTRANS_STATUS_SETTLEMENT, self::MIDTRANS_STATUS_CAPTURE => self::PAYMENT_STATUS_SUCCESS,
            self::MIDTRANS_STATUS_DENY, self::MIDTRANS_STATUS_CANCEL, self::MIDTRANS_STATUS_EXPIRE => self::PAYMENT_STATUS_FAILED,
            default => self::PAYMENT_STATUS_PENDING,
        };
    }

}
