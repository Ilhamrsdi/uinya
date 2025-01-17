<?php
namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachingLecturer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $keyType = 'string';

    public function collegeClass()
    {
        return $this->belongsTo(CollegeClass::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function lectureSubstance()
    {
        return $this->belongsTo(LectureSubstance::class);
    }

    public function evaluationType()
    {
        return $this->belongsTo(EvaluationType::class);
    }

    public function weeklySchedule()
    {
        return $this->belongsTo(WeeklySchedule::class);
    }

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
