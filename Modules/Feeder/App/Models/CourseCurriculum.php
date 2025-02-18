<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCurriculum extends Model
{
    use HasFactory;

    protected $table = 'course_curriculums';
    protected $guarded = [];
    public $incrementing = false;
    public $keyType = 'string';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

  // Model CourseCurriculum.php
    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class, 'curriculum_id', 'id');
    }

}
