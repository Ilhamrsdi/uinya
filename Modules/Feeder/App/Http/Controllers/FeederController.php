<?php

namespace Modules\Feeder\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
class FeederController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Config::get('modules.feeder')) {
            return view('feeder::disabled');
        }
    
        // Jika modul aktif, tampilkan halaman yang sesuai
        return view('feeder::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feeder::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Proses penyimpanan data (misalnya)
        // $data = new Model();
        // $data->save();
    
        // Setelah itu lakukan redirect
        return redirect()->route('feeder.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('feeder::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('feeder::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Proses update data
        // $data = Model::find($id);
        // $data->update($request->all());
    
        // Setelah itu lakukan redirect
        return redirect()->route('feeder.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
