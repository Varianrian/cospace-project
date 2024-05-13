<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function workspace()
    {
        return view('pages.workspace');
    }
}
