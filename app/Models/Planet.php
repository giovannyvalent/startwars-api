<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'diameter',
        'rotation_period',
        'orbital_period',
        'gravity',
        'population',
        'age'
    ];

    public function peoples(){
        return $this->hasMany(PeoplePlanet::class, 'planet_id', 'id');
    }
}
