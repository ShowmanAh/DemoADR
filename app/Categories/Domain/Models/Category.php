<?php

namespace App\Categories\Domain\Models;

use App\Posts\Domain\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    protected $guarded = ['id'];

    protected $fillable = ['name'];
    public function posts(){
       return $this->hasMany(Post::class, 'category_id');
    }
}
