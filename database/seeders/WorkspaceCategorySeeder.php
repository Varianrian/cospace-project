<?php

namespace Database\Seeders;

use App\Models\WorkspaceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkspaceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkspaceCategory::create([
            'name' => 'Meeting Room',
            'description' => 'A room for meeting',
        ]);

        WorkspaceCategory::create([
            'name' => 'Private Office',
            'description' => 'A private office',
        ]);

        WorkspaceCategory::create([
            'name' => 'Shared Office',
            'description' => 'A shared office',
        ]);

        WorkspaceCategory::create([
            'name' => 'Event Space',
            'description' => 'A space for event',
        ]);

        WorkspaceCategory::create([
            'name' => 'Coworking Space',
            'description' => 'A coworking space',
        ]);
    }
}
