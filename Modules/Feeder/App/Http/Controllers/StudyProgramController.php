<?php

namespace Modules\Feeder\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Feeder\App\Models\StudyProgram;  // Pastikan namespace sesuai
use App\Modules\Feeder\Models\EducationLevel;  // Sesuaikan namespace EducationLevel jika dalam modul yang sama
use Illuminate\Http\Request;
class StudyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil semua data StudyProgram dari database
        $studyPrograms = StudyProgram::all();

        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

         // Ambil semua data StudyProgram dari database dengan pencarian case-insensitive
         $studyPrograms = StudyProgram::when($search, function ($query, $search) {
            return $query->whereRaw('LOWER(code) LIKE ?', ["%".strtolower($search)."%"])
                         ->orWhereRaw('LOWER(name) LIKE ?', ["%".strtolower($search)."%"]);
        })
        ->orderBy('name', 'asc')
        ->paginate($perPage);

        // Kirim data ke view
        return view('feeder::studyProgram.index', compact('studyPrograms'));
    }
}
