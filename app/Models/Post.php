<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id','created_at', 'updated_at'];

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
