<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
