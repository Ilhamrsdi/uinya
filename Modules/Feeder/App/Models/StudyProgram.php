<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;
    protected $table = 'ref.study_programs'; // Pastikan nama tabel sesuai dengan database
    protected $guarded = [];
    public $keyType = 'string';

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function room()
    {
        return $this->morphMany(Room::class, 'unitable');
    }

    public function classGroup()
    {
        return $this->hasMany(ClassGroup::class);
    }

    public function academicPeriod()
    {
        return $this->belongsTo(AcademicPeriod::class);
    }

    public function diplomaCompanion()
    {
        return $this->hasOne(DiplomaCompanion::class);
    }

    public function studentActivity()
    {
        return $this->hasMany(StudentActivity::class);
    }

    public function userAccess()
    {
        return $this->hasMany(UserAccess::class);
    }

    public function studyProgramSetting()
    {
        return $this->hasMany(StudyProgramSetting::class);
    }

    public function scoreScales()
    {
        return $this->hasMany(ScoreScale::class, 'study_program_id');
    }
}
