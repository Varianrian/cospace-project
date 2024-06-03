<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function workspace()
    {
        return view('pages.workspace');
    }

    public function workspaceDetail()
    {
        return view('pages.workspaceDetail');
    }
}
