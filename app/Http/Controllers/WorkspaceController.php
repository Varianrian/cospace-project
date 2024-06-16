<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function workspace()
    {
        return view('pages.workspace');
    }

    public function workspaceDetail(Workspace $workspace)
    {
        return view('pages.workspaceDetail', [
            'workspace' => $workspace,
            'rooms' => $workspace->rooms,
            'facilities' => $workspace->facilities,
            'categories' => $workspace->categories,
        ]);
    }
}
