<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\ClassGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassGroup::insert([
            ['academic_year_id' => 2022, 'code' => '1TIA2022', 'name' => '1 TI A 2022', 'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1'],
            ['academic_year_id' => 2022, 'code' => '1TIB2022', 'name' => '1 TI B 2022', 'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1'],
            ['academic_year_id' => 2022, 'code' => '1TIC2022', 'name' => '1 TI C 2022', 'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1'],
            ['academic_year_id' => 2022, 'code' => '2TIA2022', 'name' => '2 TI A 2022', 'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1'],
            ['academic_year_id' => 2022, 'code' => '2TIB2022', 'name' => '2 TI B 2022', 'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1'],
        ]);
    }
}
