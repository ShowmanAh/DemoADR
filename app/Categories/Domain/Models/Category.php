<?php

namespace App\Categories\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    protected $guarded = ['id'];

    protected $fillable = ['name'];
}
