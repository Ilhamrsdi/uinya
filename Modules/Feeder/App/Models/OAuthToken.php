<?php

namespace Modules\Feeder\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OAuthToken extends Model
{
    protected $guarded = [];

    public function hasExpired()
    {
        return now()->gte($this->updated_at->addSeconds($this->expires_in));
    }
}
