<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;
class Content extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function contentable()
    {
        return $this->morphTo();
    }

    public function schedule()
    {
        return $this->morphOne(Schedule::class, 'schedulable');
    }
}
