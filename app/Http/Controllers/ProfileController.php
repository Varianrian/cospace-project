<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function profileReservation()
    {
        return view('pages.profileReservation');
    }
    public function profileBooking()
    {
        return view('pages.profileBooking');
    }
}
