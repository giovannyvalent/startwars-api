<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Planet::create([
            'name' => Str::random(10),
            'diameter' => '1000',
            'rotation_period' => '100',
            'orbital_period' => '75',
            'gravity' => '-0202',
            'population' => '12000',
            'age' => '10000'
        ]);
    }
}
