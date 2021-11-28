<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'peoples';
    protected $fillable = [
        'name',
        'birth_year',
        'eye_color',
        'gender',
        'url',
        'films'
    ];

    public function planets(){
        return $this->hasMany(PeoplePlanet::class, 'people_id', 'id');
    }
}
