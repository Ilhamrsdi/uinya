<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreScale extends Model
{
    use HasFactory;

    protected $guarded = []; // Terkadang bisa berupa relasi lain


public function studyProgram()
{
    return $this->belongsTo(StudyProgram::class, 'study_program_id');
}

}

    



