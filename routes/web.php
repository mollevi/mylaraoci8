<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FelhasznaloController;
use App\Http\Controllers\JegyController;
use App\Http\Controllers\MenetrendController;
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

Route::get('/change-password', function () {return view('changePassword');})->name('change-password');
Route::get('/admin/change-password', [AdminController::class, 'showChangePasswordForm'])->name('admin-change-password');
Route::get('/jegyek', [FelhasznaloController::class, 'showJegyekForm'])->name('jegyek');

Route::get('/jelszogenerator/{str}', function ($str) {return view('jelszogenerator',['valamijelszo'=>$str]);});

Route::post('/admin-login', [AdminController::class, 'login'])->name('admin-login');

Route::post('/change-password', [FelhasznaloController::class, 'ChangePassword'])->middleware('auth')->name('changePassword');


