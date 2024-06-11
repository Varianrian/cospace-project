<?php

namespace Database\Seeders;

use App\Models\Workspace;
use App\Models\WorkspaceCategory;
use App\Models\WorkspaceRoom;
use Illuminate\Database\Seeder;

class WorkspaceRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workspaceIds = Workspace::pluck('id')->toArray();
        $workspaceCategoryIds = WorkspaceCategory::pluck('id')->toArray();

        foreach ($workspaceIds as $workspaceId) {
            WorkspaceRoom::create([
                'workspace_id' => $workspaceId,
                'name' => 'Workspace' . $workspaceId . ' Room 1',
                'price' => 100000,
                'capacity' => 10,
                'workspace_category_id' => $workspaceCategoryIds[array_rand($workspaceCategoryIds)],
            ]);

            WorkspaceRoom::create([
                'workspace_id' => $workspaceId,
                'name' => 'Workspace' . $workspaceId . ' Room 2',
                'price' => 200000,
                'capacity' => 20,
                'workspace_category_id' => $workspaceCategoryIds[array_rand($workspaceCategoryIds)],
            ]);
        }
    }
}
