<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
        // Table Name
    protected $table = 'news';
        // Primary Key
    public $primaryKey = 'id';
        // Timestamps
    public $timestamps = true;

    protected $fillable = ['title', 'body', 'image'];

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
