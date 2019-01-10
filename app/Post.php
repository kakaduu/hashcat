<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = ['title', 'body'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function getDateAttribute($value)
    {
        return $this->created_at->diffForHumans();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }


    public function reply()
    {
        return $this->hasMany('App\Reply');
    }

    public function countTopicsByCategory()
    {
    return $this->posts()->selectRaw('category_id, count(*) as topicCount')->groupBy('category_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
