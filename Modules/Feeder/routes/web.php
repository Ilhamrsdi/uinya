<?php

use Illuminate\Support\Facades\Route;
use Modules\Feeder\App\Http\Controllers\FeederController;

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

Route::group([], function () {
    Route::resource('feeder', FeederController::class)->names('feeder');
});
