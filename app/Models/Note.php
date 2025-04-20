<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{

    Use SoftDeletes;
    public function user()
    {
        return $this->belongTo(User::class);
    }
}
