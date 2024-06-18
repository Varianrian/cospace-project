<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Payment;
use App\Models\WorkspaceRoom;
use Illuminate\Support\Carbon;

class PaymentChargeRequest extends FormRequest
{
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
            'workspace_room_id' => 'required|exists:workspace_rooms,id',
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date_format:Y-m-d',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ];
    }

    public function after(): array
    {
        return [
            function ($validator) {
                $this->checkAvailability();
            }
        ];
    }

    protected function checkAvailability(): void
    {
        $date = $this->date;
        $start_time = Carbon::parse($this->date . ' ' . $this->start_time);
        $end_time = Carbon::parse($this->date . ' ' . $this->end_time);

        $bookings = Payment::where('workspace_room_id', $this->workspace_room_id)
            ->where('status', Payment::PAYMENT_STATUS_SUCCESS)
            ->where('booking_date', $date)
            ->where(function ($query) use ($start_time, $end_time) {
                $query->where(function ($query) use ($start_time, $end_time) {
                    // Check if start_time is between any booking's check_in and check_out
                    $query->where('check_in', '<=', $start_time)
                        ->where('check_out', '>', $start_time);
                })->orWhere(function ($query) use ($start_time, $end_time) {
                    // Check if end_time is between any booking's check_in and check_out
                    $query->where('check_in', '<', $end_time)
                        ->where('check_out', '>=', $end_time);
                })->orWhere(function ($query) use ($start_time, $end_time) {
                    // Check if any booking completely overlaps the requested time
                    $query->where('check_in', '>=', $start_time)
                        ->where('check_out', '<=', $end_time);
                })->orWhere(function ($query) use ($start_time, $end_time) {
                    // Check if any booking starts before and ends after the requested time
                    $query->where('check_in', '<', $start_time)
                        ->where('check_out', '>', $end_time);
                });
            })->get();

        if ($bookings->count() > 0) {
            $this->validator->errors()->add('date', 'The room is not available for the selected date and time.');
        }
    }
}
