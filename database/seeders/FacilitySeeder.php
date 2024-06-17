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
            'name' => 'AC',
            'icon' => 'fas fa-snowflake',
        ]);

        Facility::create([
            'name' => 'Smart TV',
            'icon' => 'fas fa-tv',
        ]);

        Facility::create([
            'name' => 'WiFi',
            'icon' => 'fas fa-wifi',
        ]);

        Facility::create([
            'name' => 'Free Parking',
            'icon' => 'fas fa-parking',
        ]);

        Facility::create([
            'name' => 'Whiteboard',
            'icon' => 'fas fa-chalkboard',
        ]);

        Facility::create([
            'name' => 'Speaker',
            'icon' => 'fas fa-volume-up',
        ]);

        Facility::create([
            'name' => 'Projector',
            'icon' => 'fas fa-video',
        ]);

        Facility::create([
            'name' => 'Printer',
            'icon' => 'fas fa-print',
        ]);
    }
}
