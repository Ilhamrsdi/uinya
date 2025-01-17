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
use Modules\Feeder\App\Http\Controllers\SettingController;

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

Route::prefix('feeder')->group(function () {
    Route::get('/setting-feeder', [SettingController::class, 'index'])->name('feeder.setting');

    // Resource routes
    Route::resource('connections', ConnectionController::class)->names('feeder.connection');
    Route::resource('study-programs', StudyProgramController::class)->names('feeder.studyProgram');
    Route::resource('score-scales', ScoreScaleController::class)->names('feeder.scoreScale');
    Route::resource('courses', CourseController::class)->names('feeder.course');
    Route::resource('curriculums', CurriculumController::class)->names('feeder.curriculum');
    Route::resource('course-curriculums', CourseCurriculumController::class)->names('feeder.courseCurriculum');
    Route::resource('students', StudentController::class)->names('feeder.student');
    Route::resource('employees', EmployeeController::class)->names('feeder.employee');
    Route::resource('classes', CollageClassController::class)->names('feeder.class');
    Route::resource('scores', ScoreController::class)->names('feeder.score');
    Route::post('/toggle-program-studi', [SettingController::class, 'toggleFeederProgramStudi'])->name('toggleProgramStudi');
});
