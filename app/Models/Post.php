<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

       // polymorphic relation one  to one
    public function images()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    // polymorphic relation many to many
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
