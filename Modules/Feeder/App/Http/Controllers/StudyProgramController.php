<?php

namespace Modules\Feeder\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Feeder\App\Models\StudyProgram;  // Pastikan namespace sesuai
use App\Modules\Feeder\Models\EducationLevel;  // Sesuaikan namespace EducationLevel jika dalam modul yang sama

class StudyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data StudyProgram dari database
        $studyPrograms = StudyProgram::all();

        // Kirim data ke view
        return view('feeder::studyProgram.index', compact('studyPrograms'));
    }
}
