<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Payment;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function profileReservation()
    {
        $user = auth()->user();
        $payment = $user->payment()
            ->where('status', Payment::PAYMENT_STATUS_SUCCESS)
            ->where('check_in', '<', now())
            ->get();
        $reviews = $user->reviews()
            ->get();
        // dd($reviews);
        return view('pages.profileReservation', [
            'payments' => $payment
        ]);
    }
    public function profileBooking()
    {
        $user = auth()->user();
        $payment = $user->payment()
            ->where('status', Payment::PAYMENT_STATUS_SUCCESS)
            ->where('check_in', '>=', now())
            ->get();
        return view('pages.profileBooking', [
            'payments' => $payment
        ]);
    }
}
