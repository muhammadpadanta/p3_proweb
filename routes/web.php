<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListBarangController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/register', [DaftarController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLogin']);
Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/list', [ListBarangController::class, 'listBarang']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/pembayaran', [ProfilController::class, 'pembayaran']);
