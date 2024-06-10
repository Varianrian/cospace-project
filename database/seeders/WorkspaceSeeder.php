<?php

namespace Database\Seeders;

use App\Models\Workspace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkspaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workspace::create([
            'name' => 'EduPlex Coworking Space',
            'price' => 100000,
            'description' => 'lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            'address' => 'Jl. Raya Kuta No. 88, Kuta, Bali',
            'city' => 'Bali',
            'maps' => 'https://goo.gl/maps/1',
            'rating_avg' => 4,
            'rating_count' => 100,
        ]);

        Workspace::create([
            'name' => 'CO&CO Hub',
            'price' => 50000,
            'description' => 'lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            'address' => 'Jl. Imam Bonjol No. 88, Denpasar, Bali',
            'city' => 'Bali',
            'maps' => 'https://goo.gl/maps/2',
            'rating_avg' => 4,
            'rating_count' => 100,
        ]);

        Workspace::create([
            'name' => 'Point Lab Coworking Space',
            'price' => 200000,
            'description' => 'lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            'address' => 'Jl. Gatot Subroto No. 88, Denpasar, Bali',
            'city' => 'Bali',
            'maps' => 'https://goo.gl/maps/3',
            'rating_avg' => 4,
            'rating_count' => 100,
        ]);
    }
}
