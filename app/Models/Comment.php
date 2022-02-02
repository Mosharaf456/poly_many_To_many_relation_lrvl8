<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    // many to many polymorphic relation with comment,post,vedio
    public function commentable()
    {
        return $this->morphTo();
    }
}
