<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MidtransNotificationRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'order_id' => ['required', 'string', 'exists:payments,id'],
            'status_code' => ['required', 'string'],
            'transaction_status' => ['required', 'string'],
            'fraud_status' => ['required', 'string'],
            'payment_type' => ['required', 'string'],
            'transaction_time' => ['required', 'date'],
            'transaction_id' => ['required', 'string'],
            'status_message' => ['required', 'string'],
            'gross_amount' => ['required', 'numeric'],
            'signature_key' => ['required', 'string'],
        ];
    }

    /**
     * Get the "after" validation callables for the request.
     */
    public function after(): array
    {
        return [
            function () {
                $this->validateSignatureKey();
            }
        ];
    }

    protected function validateSignatureKey(): void
    {
        $signatureKey = $this->input('signature_key');
        $orderId = $this->input('order_id');
        $statusCode = $this->input('status_code');
        $grossAmount = $this->input('gross_amount');

        $validSignatureKey = hash('sha512', $orderId . $statusCode . $grossAmount . config('midtrans.server_key'));

        if ($signatureKey !== $validSignatureKey) {
            $this->validator->errors()->add('signature_key', 'Invalid signature');
        }
    }

}
