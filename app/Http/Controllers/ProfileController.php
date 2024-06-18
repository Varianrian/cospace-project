<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
    {
        $profile = Profile::where('user_id', auth()->id())
            ->first();

        return view('pages.profile', [
            'profile' => $profile
        ]);
    }

    public function profileUpdate(Request $request)
    {
        $profile = Profile::where('user_id', auth()->id())
            ->first();

        if (!$profile) {
            $profile = new Profile();
            $profile->user_id = auth()->id();
        }

        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->job = $request->job;
        $profile->birthday = $request->birthday;
        $profile->save();

        return redirect()->route('profile')->with([
            'status' => 'success',
            'message' => 'Profile updated successfully!'
        ]);
    }

    public function profileChangePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string|min:8',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();
        if (!\Hash::check($request->current_password, $user->password)) {
            return redirect()->route('profile')->with([
                'status' => 'error',
                'message' => 'The current password is incorrect.'
            ]);
        }

        $user->password = \Hash::make($request->password);
        $user->save();

        return redirect()->route('profile')->with([
            'status' => 'success',
            'message' => 'Password updated successfully!'
        ]);
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

    public function profileBookmark()
    {
        /** @var User $user */
        $user = auth()->user();
        $workspaces = $user->bookmarkWorkspaces()
            ->get();
        return view('pages.bookmark', [
            'workspaces' => $workspaces
        ]);
    }
}
