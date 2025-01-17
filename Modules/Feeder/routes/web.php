<?php

use Illuminate\Support\Facades\Route;
use Modules\Feeder\App\Http\Controllers\ConnectionController;
use Modules\Feeder\App\Http\Controllers\CollageClassController;
use Modules\Feeder\App\Http\Controllers\CourseController;
use Modules\Feeder\App\Http\Controllers\CourseCurriculumController;
use Modules\Feeder\App\Http\Controllers\CurriculumController;
use Modules\Feeder\App\Http\Controllers\EmployeeController;
use Modules\Feeder\App\Http\Controllers\ScoreController;
use Modules\Feeder\App\Http\Controllers\StudyProgramController;
use Modules\Feeder\App\Http\Controllers\ScoreScaleController;
use Modules\Feeder\App\Http\Controllers\StudentController;

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
    Route::resource('feeder', ConnectionController::class)->names('feeder.connection');
});

Route::group([], function () {
    Route::resource('feeder', StudyProgramController::class)->names('feeder.studyProgram');
});

Route::group([], function () {
    Route::resource('feeder', ScoreScaleController::class)->names('feeder.scoreScale');
});

Route::group([], function () {
    Route::resource('feeder', CourseController::class)->names('feeder.course');
});

Route::group([], function () {
    Route::resource('feeder', CurriculumController::class)->names('feeder.curriculum');
});

Route::group([], function () {
    Route::resource('feeder', CourseCurriculumController::class)->names('feeder.courseCurriculum');
});

Route::group([], function () {
    Route::resource('feeder', StudentController::class)->names('feeder.student');
});

Route::group([], function () {
    Route::resource('feeder', EmployeeController::class)->names('feeder.employee');
});

Route::group([], function () {
    Route::resource('feeder', CollageClassController::class)->names('feeder.class');
});

Route::group([], function () {
    Route::resource('feeder', ScoreController::class)->names('feeder.score');
});

