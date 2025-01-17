<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\Curriculum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curriculum::insert([
            [
                'id' => '9023010f-1818-4aff-a9c8-bb4902c3b9d2',
                'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1',
                'academic_period_id' => '20221',
                'name' => 'Kurikulum TRPL 2022',
                'credit_total' => '5',
                'mandatory_credit' => '0',
                'choice_credit' => '5',
            ]
        ]);
    }
}
