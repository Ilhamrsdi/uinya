<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use Modules\Feeder\App\Http\Controllers\CollageClassController;
use Modules\Feeder\App\Http\Controllers\StudyProgramController;
use Modules\Feeder\App\Http\Controllers\ScoreScaleController;
use Modules\Feeder\App\Http\Controllers\CourseController;
use Modules\Feeder\App\Http\Controllers\CourseCurriculumController;
use Modules\Feeder\App\Http\Controllers\CurriculumController;
use Modules\Feeder\App\Http\Controllers\EmployeeController;
use Modules\Feeder\App\Http\Controllers\ScoreController;
use Modules\Feeder\App\Http\Controllers\StudentController;
use Modules\Feeder\App\Http\Controllers\ConnectionController;


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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');


Route::prefix('laporan/feeder')->name('feeder.')->group(function () {

    Route::prefix('koneksi')->name('connection.')->group(function () {
        Route::get('/', [ConnectionController::class, 'index'])->name('index');
    });


    Route::prefix('program-studi')->name('studyProgram.')->group(function () {
        Route::get('/', [StudyProgramController::class, 'index'])->name('index');
    });

    Route::prefix('skala-nilai')->name('scoreScale.')->group(function () {
        Route::get('/', [ScoreScaleController::class, 'index'])->name('index');
    });

    Route::prefix('mata-kuliah')->name('course.')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
    });

    Route::prefix('kurikulum')->name('curriculum.')->group(function () {
        Route::get('/', [CurriculumController::class, 'index'])->name('index');
    });

    Route::prefix('mk-kurikulum')->name('courseCurriculum.')->group(function () {
        Route::get('/', [CourseCurriculumController::class, 'index'])->name('index');
    });

    Route::prefix('mahasiswa')->name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('index');
    });

    Route::prefix('dosen')->name('employee.')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index');
    });

    Route::prefix('kelas')->name('class.')->group(function () {
        Route::get('/', [CollageClassController::class, 'index'])->name('index');
    });

    Route::prefix('nilai')->name('score.')->group(function () {
        Route::get('/', [ScoreController::class, 'index'])->name('index');
    });

});
