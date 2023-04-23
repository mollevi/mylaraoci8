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

Route::get('/', function () {return view('welcome');})->name('welcome');//done
Route::get('/login', function () {return view('login');})->name('login');
/**
 * these routes represent the user session's lifecycle
 */
Route::post('/login', [FelhasznaloController::class, 'processLogin'])->name('login');//done
Route::post('/register', [FelhasznaloController::class, 'processRegister'])->name('register');
Route::get('/user/home', [FelhasznaloController::class, 'showHome'])->middleware('auth')->name('home');
Route::get('/user/jegyek', [FelhasznaloController::class, 'showJegy'])->name('jegyek');
Route::get('/user/profile', [FelhasznaloController::class, 'showProfile'])->middleware('auth')->name('profile');
Route::get('/user/change-password', [FelhasznaloController::class, 'showPasswordChanger'])->middleware('auth')->name('change-password');
Route::post('/user/change-password', [FelhasznaloController::class, 'processPasswordChange'])->middleware('auth')->name('change-password');
Route::get('/user/logout', [FelhasznaloController::class, 'logout'])->middleware('auth')->name('logout');
/**
 * and these for admin session's lifecycle
 */
Route::post('/admin/login', [AdminController::class, 'processLogin'])->name('admin/login');
Route::get('/admin/home', [AdminController::class, 'showHome'])->middleware('auth:admin')->name('admin/home');
Route::get('/admin/changes', [AdminController::class, 'showChanges'])->middleware('auth:admin')->name('admin/changes');
Route::get('/admin/profile', [AdminController::class, 'showProfile'])->middleware('auth:admin')->name('admin/profile');
Route::get('/admin/change-password', [AdminController::class, 'showPasswordChanger'])->middleware('auth:admin')->name('admin/change-password');
Route::post('/admin/change-password', [AdminController::class, 'processPasswordChange'])->middleware('auth:admin')->name('admin/change-password');
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth:admin')->name('admin/logout');
/**
 * ez pedig a menetrend oldal ahol mindenki megfordulhat
 */
Route::get('/menetrend', [MenetrendController::class, 'showMenetrendForm'])->name('menetrend');
Route::post('/menetrend-lista', [MenetrendController::class, 'menetrendListazas'])->name('menetrend-listazas');
/**
 * ezt az oldalt csak azért csináltuk, mert az admin is megváltoztatja valakinek a jelszavát, például ha a felhasználó személyesen igazolja magát.
 */
Route::get('/jelszogenerator/{str}', function ($str) {return view('jelszogenerator',['valamijelszo'=>$str]);});


