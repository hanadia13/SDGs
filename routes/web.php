<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WasteController;
use App\Http\Controllers\EnergyController;
use App\Http\Controllers\WaterController;
use App\Http\Controllers\ChecksheetController;
use App\Http\Controllers\ReportController;


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


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Auth::routes();
Route::any('/', [HomeController::class, 'index']);
Route::get('/waste', [WasteController::class, 'index']);
Route::get('/energy', [EnergyController::class, 'index']);
Route::get('/water', [WaterController::class, 'index']);
Route::get('/checksheet', [ChecksheetController::class, 'index']);
Route::get('/report', [ReportController::class, 'index']);