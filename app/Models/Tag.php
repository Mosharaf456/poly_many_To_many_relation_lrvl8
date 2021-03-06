<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function videos()
    {
        return $this->morphedByMany('App\Models\Video','taggable');
    }
    public function posts()
    {
        return $this->morphedByMany('App\Models\Post','taggable');
    }
// default route primary key change
    public function getRouteKeyName()
    {
        return 'name';
    }

}
