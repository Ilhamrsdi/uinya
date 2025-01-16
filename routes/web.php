<?php

use Illuminate\Support\Facades\Route;
use Modules\Feeder\App\Http\Controllers\FeederController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/feeder', [FeederController::class, 'index'])->name('feeder.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/toggle-feeder', [DashboardController::class, 'toggleFeederModule'])->name('dashboard.toggleFeeder');
Route::middleware('check.feeder')->group(function () {
    Route::get('/feeder', [FeederController::class, 'index']);
});
