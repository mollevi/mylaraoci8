<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FelhasznaloController;
use App\Http\Controllers\HelyibuszokController;
use App\Http\Controllers\JegyController;
use App\Http\Controllers\JegyekController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MegalloController;
use App\Http\Controllers\MenetrendController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TavolsagibuszokController;
use App\Http\Controllers\UserHomeController;
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
})->name('home');
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin');
Route::get('/felhasznalo/{id}', [FelhasznaloController::class, 'show'])->name('felhasznalo');;
Route::get('/helyibusz/{id}', [HelyibuszokController::class, 'show'])->name('helyibusz');
Route::get('/jegy/{id}', [JegyController::class, 'show'])->name('jegy');
Route::get('/megallo/{id}', [MegalloController::class, 'show'])->name('megallo');
Route::get('/tavolsagibuszok/{id}', [TavolsagibuszokController::class, 'show'])->name('tavolsagibuszok');
Route::get('/vonatok/{id}', [VonatokController::class, 'show'])->name('vonatok');

Route::post('/register', 'RegistrationController@register')->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/menetrend', [MenetrendController::class, 'showMenetrendForm'])->name('menetrend');

Route::get('/userHome', [UserHomeController::class, 'showUserHomeForm'])->name('userHome');
Route::get('/profil', [ProfilController::class, 'showProfilForm'])->name('profil');

Route::get('/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('changePassword');
Route::get('/jegyek', [JegyekController::class, 'showJegyekForm'])->name('jegyek');

Route::post('/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->middleware('auth')->name('changePassword');


