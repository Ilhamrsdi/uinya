<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            [
                'id' => '19c962da-d9e9-4ff3-9e5e-41bb0e28acde',
                'nim' => '362055401002',
                'name' => 'Egi Sabta Hiro',
                'gender' => 'L',
                'weight_body' => '67',
                'height_body' => '167',
                'blood' => 'A',
                'birthplace' => 'Banyuwangi',
                'birthdate' => '2002-09-12',
                'nik' => '098881772655672',
                'nisn' => '09992812',
                'kk' => '0000991882773613',
                'passport' => '182389989182',
                'phone_number' => '08544416627',
                'house_phone_number' => '0229812312',
                'email' => 'egisabta@gmail.com',
                'diploma_file' => '-',
                'entry_date' => '2022-09-12',
                'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1',
                'consentration_id' => null,
                'academic_period_id' => '20221',
                'employee_id' => 'ec9fb2c6-a118-4748-91be-804d9b6ae87b',
                'lecture_system_id' => '1',
                'student_status_id' => 'A',
                'registration_type_id' => '1',
                'religion_id' => '1',
                'country_id' => 'ID',
                'transportation_id' => '13',
                'profession_id' => '1',
                'income_id' => '1',
                'region_id' => '052505',
                'class_group_id' => '1',
                'registration_path_id' => '1',
                'origin_school_id' => null,
                'type_of_stay_id' => '2',
                'marital_status' => 'L',
                'mother_name' => 'Supiyah'
            ],
            [
                'id' => 'ac185491-3d65-4a72-9a60-adc633d9bdaf',
                'nim' => '362055401029',
                'name' => 'Ervia Nur Rahmasari',
                'gender' => 'P',
                'weight_body' => '67',
                'height_body' => '167',
                'blood' => 'A',
                'birthplace' => 'Jombang',
                'birthdate' => '2002-09-12',
                'nik' => '098881772655671',
                'nisn' => '09992811',
                'kk' => '0000991882773613',
                'passport' => '182389989183',
                'phone_number' => '08544416627',
                'house_phone_number' => '0229812312',
                'email' => 'ervia@gmail.com',
                'diploma_file' => '-',
                'entry_date' => '2022-09-12',
                'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1',
                'consentration_id' => null,
                'academic_period_id' => '20221',
                'employee_id' => 'ec9fb2c6-a118-4748-91be-804d9b6ae87b',
                'lecture_system_id' => '1',
                'student_status_id' => 'A',
                'registration_type_id' => '1',
                'religion_id' => '1',
                'country_id' => 'ID',
                'transportation_id' => '13',
                'profession_id' => '1',
                'income_id' => '1',
                'region_id' => '286008',
                'class_group_id' => '1',
                'registration_path_id' => '1',
                'origin_school_id' => null,
                'type_of_stay_id' => '2',
                'marital_status' => 'L',
                'mother_name' => 'Katmineng'
            ],
            [
                'id' => '7ff96e76-183b-434c-a4fe-0c25180e2ae7',
                'nim' => '362055401022',
                'name' => 'Rikiansyah Aris Pradana',
                'gender' => 'L',
                'weight_body' => '67',
                'height_body' => '167',
                'blood' => 'A',
                'birthplace' => 'Banyuwangi',
                'birthdate' => '2002-09-12',
                'nik' => '098881772655673',
                'nisn' => '09992813',
                'kk' => '0000991882773613',
                'passport' => '182389989181',
                'phone_number' => '08544416627',
                'house_phone_number' => '0229812312',
                'email' => 'riki@gmail.com',
                'diploma_file' => '-',
                'entry_date' => '2022-09-12',
                'study_program_id' => 'bbe32aca-5907-4f3a-8ff1-3f427abf62d1',
                'consentration_id' => null,
                'academic_period_id' => '20221',
                'employee_id' => 'ec9fb2c6-a118-4748-91be-804d9b6ae87b',
                'lecture_system_id' => '1',
                'student_status_id' => 'A',
                'registration_type_id' => '1',
                'religion_id' => '1',
                'country_id' => 'ID',
                'transportation_id' => '13',
                'profession_id' => '1',
                'income_id' => '1',
                'region_id' => '052503',
                'class_group_id' => '1',
                'registration_path_id' => '1',
                'origin_school_id' => null,
                'type_of_stay_id' => '2',
                'marital_status' => 'L',
                'mother_name' => 'Yuni'
            ],
            [
                'id' => '788c8f50-ed3c-42fb-8eee-a4f6c963b91b',
                'nim' => '362055401021',
                'name' => 'Aida Andinar Maulidiana',
                'gender' => 'P',
                'weight_body' => '67',
                'height_body' => '167',
                'blood' => 'A',
                'birthplace' => 'Banyuwangi',
                'birthdate' => '2002-09-12',
                'nik' => '098881772655674',
                'nisn' => '09992814',
                'kk' => '0000991882773614',
                'passport' => '182389989184',
                'phone_number' => '08544416627',
                'house_phone_number' => '0229812312',
                'email' => 'aida@gmail.com',
                'diploma_file' => '-',
                'entry_date' => '2022-09-12',
                'study_program_id' => '98a2fa2a-b61d-41fe-be59-8750253c1bab',
                'consentration_id' => null,
                'academic_period_id' => '20221',
                'employee_id' => 'ec9fb2c6-a118-4748-91be-804d9b6ae81b',
                'lecture_system_id' => '1',
                'student_status_id' => 'A',
                'registration_type_id' => '1',
                'religion_id' => '1',
                'country_id' => 'ID',
                'transportation_id' => '13',
                'profession_id' => '1',
                'income_id' => '1',
                'region_id' => '052503',
                'class_group_id' => '1',
                'registration_path_id' => '1',
                'origin_school_id' => null,
                'type_of_stay_id' => '2',
                'marital_status' => 'L',
                'mother_name' => 'Rina'
            ],
            [
                'id' => '6be384d9-5cf7-4604-8db5-51bcab53b8eb',
                'nim' => '362055401020',
                'name' => 'Dwivany Wahyu Wildana',
                'gender' => 'L',
                'weight_body' => '67',
                'height_body' => '167',
                'blood' => 'A',
                'birthplace' => 'Banyuwangi',
                'birthdate' => '2002-09-12',
                'nik' => '098881772655675',
                'nisn' => '09992815',
                'kk' => '0000991882773615',
                'passport' => '182389989185',
                'phone_number' => '08544416627',
                'house_phone_number' => '0229812312',
                'email' => 'wildan@gmail.com',
                'diploma_file' => '-',
                'entry_date' => '2022-09-12',
                'study_program_id' => '98a2fa2a-b61d-41fe-be59-8750253c1bab',
                'consentration_id' => null,
                'academic_period_id' => '20221',
                'employee_id' => 'ec9fb2c6-a118-4748-91be-804d9b6ae81b',
                'lecture_system_id' => '1',
                'student_status_id' => 'A',
                'registration_type_id' => '1',
                'religion_id' => '1',
                'country_id' => 'ID',
                'transportation_id' => '13',
                'profession_id' => '1',
                'income_id' => '1',
                'region_id' => '052503',
                'class_group_id' => '1',
                'registration_path_id' => '1',
                'origin_school_id' => null,
                'type_of_stay_id' => '2',
                'marital_status' => 'L',
                'mother_name' => 'Desi'
            ],
        ]);
    }
}
