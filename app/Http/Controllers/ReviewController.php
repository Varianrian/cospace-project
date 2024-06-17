<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string',
            'workspace_room_id' => 'required|exists:workspace_rooms,id',
            'user_id' => 'required|exists:users,id'
        ]);

        $review = Review::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Review created successfully',
            'data' => $review
        ], 201);
    }
}
