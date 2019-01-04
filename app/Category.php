<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function countTopicsByCategory()
    {
    return $this->posts()->selectRaw('category_id, count(*) as topicCount')->groupBy('category_id');
    }
}
