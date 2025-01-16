<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CheckFeederModuleStatus
{
    public function handle(Request $request, Closure $next)
    {
        // Mengecek status aktif modul Feeder
        if (!Config::get('modules.feeder')) {
            // Jika modul non-aktif, bisa diarahkan ke halaman tertentu atau tampilkan pesan
            return response()->view('feeder::disabled');  // Pastikan Anda punya view 'feeder.disabled'
        }

        return $next($request);
    }
}
