<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

class Region extends Model
{
    use HasFactory, HasHashid, HashidRouting;

    protected $table = 'ref.regions';
    protected $guarded = [];
    protected $appends = ['hashid'];

    public function parent()
    {
        return $this->belongsTo(Region::class, 'parent');
    }

    public function children()
    {
        return $this->hasMany(Region::class, 'parent');
    }
}
