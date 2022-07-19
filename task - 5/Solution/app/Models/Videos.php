<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Contents;
class Videos extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function content()
    {
        return $this->morphMany(Contents::class, 'contentable');
    }
}

