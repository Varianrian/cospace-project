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
        $bookmark = auth()->user()?->bookmarks->contains('workspace_id', $workspace->id);
        $reviews = $workspace->reviews()->limit(4)->get();

        return view('pages.workspaceDetail', [
            'workspace' => $workspace,
            'rooms' => $workspace->rooms,
            'facilities' => $workspace->facilities,
            'categories' => $workspace->categories,
            'bookmark' => $bookmark,
            'reviews' => $reviews,
        ]);
    }
}
