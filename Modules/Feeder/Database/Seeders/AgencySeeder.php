<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\Agency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::insert([
            [
                'name' => 'CV. Web Media Solusi Digital',
                'phone_number' => '08816321180',
                'address' => 'Perumahan Adi Mas Blok M No. 6 Rogojampi'
            ]
        ]);
    }
}
