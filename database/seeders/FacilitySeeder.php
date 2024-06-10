<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'name' => 'Air Conditioner',
            'icon' => 'fas fa-fan',
        ]);

        Facility::create([
            'name' => 'Projector',
            'icon' => 'fas fa-video',
        ]);

        Facility::create([
            'name' => 'Whiteboard',
            'icon' => 'fas fa-chalkboard',
        ]);

        Facility::create([
            'name' => 'Printer',
            'icon' => 'fas fa-print',
        ]);

        Facility::create([
            'name' => 'Scanner',
            'icon' => 'fas fa-image',
        ]);
    }
}
