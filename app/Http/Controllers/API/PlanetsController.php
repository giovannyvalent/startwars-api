<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetsController extends Controller
{
    public function getPlanets(){
        $planets = Planet::with('peoples')->get();
        return response()->json(['data' => $planets]);
    }
}
