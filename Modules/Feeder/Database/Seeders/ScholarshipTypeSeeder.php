<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\ScholarshipType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScholarshipType::insert([
            ['name' => 'Bidikmisi'],
            ['name' => 'KIPK'],
            ['name' => 'LPDP'],
            ['name' => 'Banyuwangi Cerdas'],
        ]);
    }
}
