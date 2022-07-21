<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Courses;
use App\Models\Content;

class Schedule extends Model
{
    use HasFactory;

  
    public function get_course($id)
    {
        return Course::find($id);
    }

    public function get_content($id)
    {
        return Content::find($id)->contentable;
    }
}
