<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;

class HomeController extends Controller
{
    public function home()
    {
        $workspaces = Workspace::inRandomOrder()->limit(8)->get();
        return view('pages.home', [
            'workspaces' => $workspaces
        ]);
    }
}
