<?php

namespace App\Posts\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use App\Categories\Domain\Models\Category;

class Post extends Model
{
    protected $guarded = ['id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
