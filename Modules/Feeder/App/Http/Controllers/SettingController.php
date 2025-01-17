<?php
namespace Modules\Feeder\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        // Mengambil status modul feeder dan program studi dari konfigurasi
        $isFeederModuleActive = Config::get('modules.feeder');
        return view('feeder::settings.index', compact('isFeederModuleActive'));
    }

    public function toggleFeederModule(Request $request)
    {
        // Mendapatkan status saat ini dari konfigurasi
        $currentStatus = Config::get('modules.feeder');
        
        // Membalik status
        $newStatus = !$currentStatus;
        
        // Update file .env dengan status yang baru
        $this->updateEnvFile('MODULE_FEEDER_ENABLED', $newStatus ? 'true' : 'false');
        
        // Redirect kembali ke halaman setting dengan pesan status
        return redirect()->back()->with('status', 'Modul Feeder telah diperbarui.');
    }
    
    protected function updateEnvFile($key, $value)
    {
        $envFile = app()->environmentFilePath();
        $envContent = file_get_contents($envFile);
        
        // Mengganti nilai yang ada pada file .env
        $envContent = preg_replace(
            "/^{$key}=(.*)$/m",
            "{$key}={$value}",
            $envContent
        );
        
        // Menyimpan perubahan kembali ke file .env
        file_put_contents($envFile, $envContent);
    }
    
}
