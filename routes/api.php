<?php

use App\Http\Controllers\actividadController;
use App\Http\Controllers\animalController;
use App\Http\Controllers\cuidadorController;
use App\Http\Controllers\especieController;
use App\Http\Controllers\recintoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('actividad', [actividadController::class, 'index']);
Route::get('actividad/{id}', [actividadController::class, 'show']);
Route::post('actividad', [actividadController::class, 'store']);
Route::patch('actividad/{id}', [actividadController::class, 'update']);
Route::delete('actividad/{id}', [actividadController::class, 'destroy']);

Route::get('animal', [animalController::class, 'index']);
Route::get('animal/{id}', [animalController::class, 'show']);
Route::post('animal', [animalController::class, 'store']);
Route::patch('animal/{id}', [animalController::class, 'update']);
Route::delete('animal/{id}', [animalController::class, 'destroy']);

Route::get('cuidador', [cuidadorController::class, 'index']);
Route::get('cuidador/{id}', [cuidadorController::class, 'show']);
Route::post('cuidador', [cuidadorController::class, 'store']);
Route::patch('cuidador/{id}', [cuidadorController::class, 'update']);
Route::delete('cuidador/{id}', [cuidadorController::class, 'destroy']);

Route::get('especie', [especieController::class, 'index']);
Route::get('especie/{id}', [especieController::class, 'show']);
Route::post('especie', [especieController::class, 'store']);
Route::patch('especie/{id}', [especieController::class, 'update']);
Route::delete('especie/{id}', [especieController::class, 'destroy']);

Route::get('recinto', [recintoController::class, 'index']);
Route::get('recinto/{id}', [recintoController::class, 'show']);
Route::post('recinto', [recintoController::class, 'store']);
Route::patch('recinto/{id}', [recintoController::class, 'update']);
Route::delete('recinto/{id}', [recintoController::class, 'destroy']);