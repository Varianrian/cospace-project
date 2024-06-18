<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'workspace_id' => 'required|exists:workspaces,id',
            'user_id' => 'required|exists:users,id'
        ]);

        $user = User::find($request->user_id);

        $user->bookmarks()->create([
            'workspace_id' => $request->workspace_id
        ]);

        return response()->json(['status' => 'success', 'message' => 'Workspace bookmarked successfully']);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'workspace_id' => 'required|exists:workspaces,id'
        ]);

        $user = User::find($request->user_id);

        $user->bookmarks()->where('workspace_id', $request->workspace_id)->delete();

        return response()->json(['status' => 'success', 'message' => 'Workspace bookmark removed successfully']);
    }
}
