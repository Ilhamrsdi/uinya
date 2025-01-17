<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;
use Illuminate\Support\Str;
use Exception;

class StudentCourse extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $keyType = "string";
    public $incrementing = false;


    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function academicPeriod()
    {
        return $this->belongsTo(AcademicPeriod::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
