<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Feeder\App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'id' => 'dbdafc88-482e-4e2b-b9a4-1c810bafd174',
            'study_program_id' => null,
            'course_type_id' => 'A',
            'course_group_id' => 1,
            'scientific_field_id' => 1,
            'code' => 'CS101',
            'name' => 'Pemrograman Dasar',
            'name_en' => 'Pemrograman Dasar',
            'alias' => 'PD',
            'credit_total' => 4,
            'credit_meeting' => 1,
            'credit_practicum' => 1,
            'credit_practice' => 1,
            'credit_simulation' => 1,
            'is_mku' => false,
            'is_sap' => true,
            'is_silabus' => true,
            'is_bahan_ajar' => true,
            'is_diktat' => true,
            'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1'
        ]);
    }
}
