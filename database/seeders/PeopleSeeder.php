<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peoples = [
            [
                'name' => Str::random(10),
                'birth_year' => '22',
                'eye_color' => 'blue',
                'gender' => 'male',
                'url' => '',
                'films' => null
            ],
            [
                'name' => Str::random(10),
                'birth_year' => '24',
                'eye_color' => 'blue',
                'gender' => 'male',
                'url' => '',
                'films' => null
            ],
            [
                'name' => Str::random(10),
                'birth_year' => '30',
                'eye_color' => 'blue',
                'gender' => 'female',
                'url' => '',
                'films' => null
            ]
        ];

        foreach($peoples as $people){
            People::create($people);
        }
    }
}
