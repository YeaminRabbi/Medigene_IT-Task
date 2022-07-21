<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;
 
class Video extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function contents()
    {
        return $this->morphMany(Content::class, 'contentable');
    }

    public function content()
    {
        return $this->morphOne(Content::class, 'contentable');

    }
}
