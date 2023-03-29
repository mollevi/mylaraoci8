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
})->name('home');;
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin');
Route::get('/felhasznalo/{id}', [FelhasznaloController::class, 'show'])->name('felhasznalo');;
Route::get('/helyibusz/{id}', [HelyibuszokController::class, 'show'])->name('helyibusz');
Route::get('/jegy/{id}', [JegyController::class, 'show'])->name('jegy');
Route::get('/megallo/{id}', [MegalloController::class, 'show'])->name('megallo');
Route::get('/tavolsagibuszok/{id}', [TavolsagibuszokController::class, 'show'])->name('tavolsagibuszok');
Route::get('/vonatok/{id}', [VonatokController::class, 'show'])->name('vonatok');
