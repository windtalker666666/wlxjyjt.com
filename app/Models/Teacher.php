<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function courses()
    {
        return $this->hasMany(Teacher::class);
    }
}
