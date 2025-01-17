<?php

namespace Modules\Feeder\App\Http\Controllers;
use App\Http\Controllers\Controller;

class StudentCollegeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Jika modul aktif, tampilkan halaman yang sesuai
        return view('feeder::studentCollegeActivity.index');
    }





}
