<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heregistration extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $incrementing = false;
    public $keyType = 'string';

    public function academicPeriod()
    {
        return $this->belongsTo(AcademicPeriod::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
