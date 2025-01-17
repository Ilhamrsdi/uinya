<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    public function weeklySchedule()
    {
        return $this->belongsTo(WeeklySchedule::class);
    }
}
