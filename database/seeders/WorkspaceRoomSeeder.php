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

        
        WorkspaceRoom::create([
            'workspace_id' => 1,
            'name' => 'Ruang Meeting',
            'price' => 100000,
            'capacity' => 20,
            'workspace_category_id' => 2,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 1,
            'name' => 'Studio',
            'price' => 150000,
            'capacity' => 10,
            'workspace_category_id' => 5,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 1,
            'name' => 'Coworking Space',
            'price' => 100000,
            'capacity' => 10,
            'workspace_category_id' => 1,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 2,
            'name' => 'Ruang Meeting',
            'price' => 100000,
            'capacity' => 20,
            'workspace_category_id' => 2,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 2,
            'name' => 'Private Office',
            'price' => 200000,
            'capacity' => 5,
            'workspace_category_id' => 3,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 2,
            'name' => 'Event Space',
            'price' => 300000,
            'capacity' => 10,
            'workspace_category_id' => 4,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 3,
            'name' => 'Studio',
            'price' => 100000,
            'capacity' => 20,
            'workspace_category_id' => 5,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 3,
            'name' => 'Coworking Space',
            'price' => 100000,
            'capacity' => 10,
            'workspace_category_id' => 1,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 3,
            'name' => 'Private Office',
            'price' => 200000,
            'capacity' => 5,
            'workspace_category_id' => 3,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 4,
            'name' => 'Ruang Meeting',
            'price' => 100000,
            'capacity' => 20,
            'workspace_category_id' => 2,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 4,
            'name' => 'Studio',
            'price' => 150000,
            'capacity' => 10,
            'workspace_category_id' => 5,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 4,
            'name' => 'Event Space',
            'price' => 400000,
            'capacity' => 10,
            'workspace_category_id' => 4,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 5,
            'name' => 'Coworking Space',
            'price' => 100000,
            'capacity' => 10,
            'workspace_category_id' => 1,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 5,
            'name' => 'Private Office',
            'price' => 200000,
            'capacity' => 5,
            'workspace_category_id' => 3,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 5,
            'name' => 'Event Space',
            'price' => 300000,
            'capacity' => 10,
            'workspace_category_id' => 4,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 6,
            'name' => 'Coworking Space',
            'price' => 100000,
            'capacity' => 10,
            'workspace_category_id' => 1,
        ]);
        
        WorkspaceRoom::create([
            'workspace_id' => 6,
            'name' => 'Private Office',
            'price' => 200000,
            'capacity' => 5,
            'workspace_category_id' => 3,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 6,
            'name' => 'Event Space',
            'price' => 300000,
            'capacity' => 10,
            'workspace_category_id' => 4,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 6,
            'name' => 'Ruang Meeting',
            'price' => 100000,
            'capacity' => 20,
            'workspace_category_id' => 2,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 7,
            'name' => 'Studio',
            'price' => 150000,
            'capacity' => 10,
            'workspace_category_id' => 5,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 7,
            'name' => 'Coworking Space',
            'price' => 100000,
            'capacity' => 10,
            'workspace_category_id' => 1,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 7,
            'name' => 'Private Office',
            'price' => 200000,
            'capacity' => 5,
            'workspace_category_id' => 3,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 8,
            'name' => 'Ruang Meeting',
            'price' => 100000,
            'capacity' => 20,
            'workspace_category_id' => 2,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 8,
            'name' => 'Studio',
            'price' => 150000,
            'capacity' => 10,
            'workspace_category_id' => 5,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 9,
            'name' => 'Coworking Space',
            'price' => 100000,
            'capacity' => 10,
            'workspace_category_id' => 1,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 9,
            'name' => 'Private Office',
            'price' => 200000,
            'capacity' => 5,
            'workspace_category_id' => 3,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 9,
            'name' => 'Event Space',
            'price' => 300000,
            'capacity' => 10,
            'workspace_category_id' => 4,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 9,
            'name' => 'Ruang Meeting',
            'price' => 100000,
            'capacity' => 20,
            'workspace_category_id' => 2,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 9,
            'name' => 'Studio',
            'price' => 150000,
            'capacity' => 10,
            'workspace_category_id' => 5,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 10,
            'name' => 'Coworking Space',
            'price' => 100000,
            'capacity' => 10,
            'workspace_category_id' => 1,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 10,
            'name' => 'Private Office',
            'price' => 200000,
            'capacity' => 5,
            'workspace_category_id' => 3,
        ]);

        WorkspaceRoom::create([
            'workspace_id' => 10,
            'name' => 'Event Space',
            'price' => 300000,
            'capacity' => 10,
            'workspace_category_id' => 4,
        ]);
  
    }
    
}
