<?php

namespace Database\Seeders;
use App\Models\Location;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'id' => 1,
            'name' => 'Acme Fresh Start Housing',
            'city' => 'Chicago',
            'state' => 'IL',
            'photo' => '/assets/bukchon-3905234_1280.jpg',
            'availableUnits' => 4,
            'wifi' => true,
            'laundry' => true
        ]);
    }
}
