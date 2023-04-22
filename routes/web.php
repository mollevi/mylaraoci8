<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FelhasznaloController;
use App\Http\Controllers\HelyibuszokController;
use App\Http\Controllers\JegyController;
use App\Http\Controllers\JegyekController;
use App\Http\Controllers\MegalloController;
use App\Http\Controllers\MenetrendController;
use App\Http\Controllers\TavolsagibuszokController;
use App\Http\Controllers\VonatokController;
use Illuminate\Support\Facades\Redirect;
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
Route::post('/login', [FelhasznaloController::class, 'login'])->name('login');

Route::get('/login', [FelhasznaloController::class, 'showLoginForm'])->name('login');
Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin-logout');
Route::get('/felhasznalo-logout', [FelhasznaloController::class, 'logout'])->name('felhasznalo-logout');

Route::get('/menetrend', [MenetrendController::class, 'showMenetrendForm'])->name('menetrend');

Route::get('/userHome', [FelhasznaloController::class, 'showUserHomeForm'])->name('userHome');
Route::get('/adminHome', [AdminController::class, 'showAdminHomeForm'])->name('adminHome');

Route::get('/profil', [FelhasznaloController::class, 'showProfilForm'])->name('profil');
Route::get('/adminProfil', [AdminController::class, 'showAdminProfilForm'])->name('adminProfil');

Route::get('/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('changePassword');
Route::get('/jegyek', [JegyekController::class, 'showJegyekForm'])->name('jegyek');

Route::get('/jelszogenerator/{str}', function ($str) {return view('jelszogenerator',['valamijelszo'=>$str]);});

Route::post('/admin-login', [AdminController::class, 'login'])->name('admin-login');

Route::post('/change-password', [ChangePasswordController::class, 'ChangePassword'])->middleware('auth')->name('changePassword');


