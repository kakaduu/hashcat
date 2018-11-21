<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'body', 'pic'];
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    public function topics(){
        return $this->belongsToMany('App\Models\Topic');
    }

}
