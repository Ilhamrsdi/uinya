<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\Score;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Score::insert([
            [
                'id' => Uuid::uuid4(),
                'college_class_id' => '3f05dee7-6cc9-4eb2-b418-89b11239d34a',
                'student_id' => '19c962da-d9e9-4ff3-9e5e-41bb0e28acde',
                'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1',
                'academic_period_id' => '20221',
                'course_id' => 'dbdafc88-482e-4e2b-b9a4-1c810bafd174',
                'mid_exam' => 0,
                'final_exam' => 0,
                'coursework' => 0,
                'quiz' => 0,
                'attendance' => 0,
                'practice' => 0,
                'final_score' => 0,
                'remedial_score' => 0,
                'final_grade' => 'E',
                'score' => 0,
                'grade' => 'E',
                'index_score' => 0,
            ],

        ]);
    }
}
