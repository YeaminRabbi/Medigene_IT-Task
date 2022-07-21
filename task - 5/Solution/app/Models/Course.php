<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;
class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function schedule()
    {
        return $this->morphOne(Schedule::class, 'schedulable');
    }
}
