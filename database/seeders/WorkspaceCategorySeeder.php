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
            'name' => 'Coworking Space',
            'description' => 'A room for coworking (shared office)',
        ]);

        WorkspaceCategory::create([
            'name' => 'Meeting Room',
            'description' => 'A room for meeting',
        ]);

        WorkspaceCategory::create([
            'name' => 'Private Office',
            'description' => 'A private office',
        ]);

        WorkspaceCategory::create([
            'name' => 'Event Space',
            'description' => 'A room for event',
        ]);

        WorkspaceCategory::create([
            'name' => 'Studio',
            'description' => 'A studio',
        ]);
    }
}
