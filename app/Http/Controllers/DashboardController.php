<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard dan status modul Feeder
     */
    public function index()
    {
        // Membaca status aktif/non-aktif modul dari konfigurasi
        $isFeederModuleActive = Config::get('modules.feeder');

        return view('dashboard.index', compact('isFeederModuleActive'));
    }

    /**
     * Mengubah status aktif atau non-aktif modul Feeder
     */
    public function toggleFeederModule()
    {
        // Mengubah status aktif/non-aktif di konfigurasi
        $currentStatus = Config::get('modules.feeder');
        $newStatus = !$currentStatus;  // Membalik status

        // Menyimpan status baru ke dalam file .env
        $this->updateEnvFile('MODULE_FEEDER_ENABLED', $newStatus ? 'true' : 'false');

        return redirect()->route('dashboard.index')->with('status', 'Modul Feeder telah diperbarui.');
    }

    /**
     * Mengupdate nilai di file .env
     */
    protected function updateEnvFile($key, $value)
    {
        $envFile = app()->environmentFilePath();
        $envContent = file_get_contents($envFile);
        $envContent = preg_replace(
            "/^{$key}=(.*)$/m",
            "{$key}={$value}",
            $envContent
        );
        file_put_contents($envFile, $envContent);
    }
}
