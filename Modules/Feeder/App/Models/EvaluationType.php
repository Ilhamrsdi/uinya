<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationType extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name'];

    public function teachingLecturer()
    {
        return $this->hasMany(TeachingLecturer::class);
    }
}
