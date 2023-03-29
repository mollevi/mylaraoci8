<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FelhasznaloController;
use App\Http\Controllers\HelyibuszokController;
use App\Http\Controllers\JegyController;
use App\Http\Controllers\MegalloController;
use App\Http\Controllers\TavolsagibuszokController;
use App\Http\Controllers\VonatokController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/{id}', [AdminController::class, 'show']);
Route::get('/felhasznalo/{id}', [FelhasznaloController::class, 'show']);
Route::get('/helyibusz/{id}', [HelyibuszokController::class, 'show']);
Route::get('/jegy/{id}', [JegyController::class, 'show']);
Route::get('/megallo/{id}', [MegalloController::class, 'show']);
Route::get('/tavolsagibuszok/{id}', [TavolsagibuszokController::class, 'show']);
Route::get('/vonatok/{id}', [VonatokController::class, 'show']);
