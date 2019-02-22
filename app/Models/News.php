<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'category_id', 'content','thumbnail','status','read_count'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
}
