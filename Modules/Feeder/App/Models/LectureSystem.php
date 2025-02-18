<?php
namespace Modules\Feeder\App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

class LectureSystem extends Model
{
    use HasFactory, HasHashid, HashidRouting;

    protected $appends = ['hashid'];
    protected $hidden = ['id'];
    protected $fillable = ['name'];
}
