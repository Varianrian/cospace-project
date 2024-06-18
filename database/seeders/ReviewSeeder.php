<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkspaceRoom;
use App\Models\User;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workspaceRoomIds = WorkspaceRoom::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();

        foreach ($workspaceRoomIds as $workspaceRoomId) {
            foreach ($userIds as $userId) {
                Review::create([
                    'user_id' => $userId,
                    'workspace_room_id' => $workspaceRoomId,
                    'rating' => rand(1, 5),
                    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'
                ]);
            }
        }
    }
}
