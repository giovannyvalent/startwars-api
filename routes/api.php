<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PeoplesController;
use App\Http\Controllers\API\PlanetsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/planets', [PlanetsController::class, 'getPlanets']);

Route::get('/peoples', [PeoplesController::class, 'getPeoples']);
Route::get('/unique-people/{id}', [PeoplesController::class, 'peopleUnique']);
Route::post('/create-people', [PeoplesController::class, 'createPeople']);
Route::put('/update-people', [PeoplesController::class, 'updatePeople']);
Route::delete('/delete-people/{id}', [PeoplesController::class, 'deletePeople']);
