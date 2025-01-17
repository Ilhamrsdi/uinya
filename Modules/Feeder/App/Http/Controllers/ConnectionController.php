<?php
namespace Modules\Feeder\App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil status modul feeder dari konfigurasi
        $isFeederModuleActive = Config::get('modules.feeder');  // Sesuaikan key konfigurasi sesuai kebutuhan

        // Jika modul tidak aktif, redirect ke halaman 404 (Not Found)
        if (!$isFeederModuleActive) {
            return view('feeder::disabled'); // Ganti dengan view disabled.blade.php
        }

        // Jika modul aktif, tampilkan halaman yang sesuai
        return view('feeder::connection.index');
    }
}
