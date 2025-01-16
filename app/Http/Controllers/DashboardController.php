<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class DashboardController extends Controller
{
    public function index()
    {
        $isFeederModuleActive = Config::get('modules.feeder');
        return view('dashboard.index', compact('isFeederModuleActive'));
    }

    public function toggleFeederModule()
    {
        $currentStatus = Config::get('modules.feeder');
        $newStatus = !$currentStatus;
        $this->updateEnvFile('MODULE_FEEDER_ENABLED', $newStatus ? 'true' : 'false');
        return redirect()->route('dashboard.index')->with('status', 'Modul Feeder telah diperbarui.');
    }

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
