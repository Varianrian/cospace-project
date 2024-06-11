<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call('app:create-super-admin');
        $this->call([
            WorkspaceCategorySeeder::class,
            FacilitySeeder::class,
            WorkspaceSeeder::class,
            WorkspaceRoomSeeder::class,
        ]);
    }
}
