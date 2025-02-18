<?php

namespace Database\Seeders;

use Modules\Feeder\App\Models\EducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EducationLevel::insert([
            [
                "id" => 9,
                "code" => "Paket C",
                "name" => "Paket C",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 30,
                "code" => "S1",
                "name" => "Strata 1",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ],
            [
                "id" => 0,
                "code" => "0",
                "name" => "Tidak sekolah",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 5,
                "code" => "SMP",
                "name" => "SMP \/ sederajat",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 3,
                "code" => "Putus SD",
                "name" => "Putus SD",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 35,
                "code" => "S2",
                "name" => "Strata 2",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ],
            [
                "id" => 32,
                "code" => "Sp-1",
                "name" => "Spesialis-1",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ],
            [
                "id" => 1,
                "code" => "PAUD",
                "name" => "PAUD",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 20,
                "code" => "D1",
                "name" => "Diploma 1",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => false,
            ],
            [
                "id" => 4,
                "code" => "SD",
                "name" => "SD \/ sederajat",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 91,
                "code" => "Informal",
                "name" => "Informal",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 31,
                "code" => "Profesi",
                "name" => "Profesi",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ],
            [
                "id" => 36,
                "code" => "S2 Terapan",
                "name" => "S2 Terapan",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ],
            [
                "id" => 41,
                "code" => "S3 Terapan",
                "name" => "S3 Terapan",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ],
            [
                "id" => 6,
                "code" => "SMA",
                "name" => "SMA \/ sederajat",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 40,
                "code" => "S3",
                "name" => "Strata 3",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ],
            [
                "id" => 2,
                "code" => "TK",
                "name" => "TK \/ sederajat",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 90,
                "code" => "Non formal",
                "name" => "Non formal",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 7,
                "code" => "Paket A",
                "name" => "Paket A",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 23,
                "code" => "D4",
                "name" => "Diploma 4",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => false,
            ],
            [
                "id" => 22,
                "code" => "D3",
                "name" => "Diploma 3",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => false,
            ],
            [
                "id" => 21,
                "code" => "D2",
                "name" => "Diploma 2",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => false,
            ],
            [
                "id" => 99,
                "code" => "Lainnya",
                "name" => "Lainnya",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 8,
                "code" => "Paket B",
                "name" => "Paket B",
                "name_en" => null,
                "number" => 0,
                "is_college" => false,
                "is_postgraduate" => false,
            ],
            [
                "id" => 37,
                "code" => "Sp-2",
                "name" => "Spesialis-2",
                "name_en" => null,
                "number" => 0,
                "is_college" => true,
                "is_postgraduate" => true,
            ]
        ]);
    }
}
