<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'avatar', 'username', 'password', 'about'];

    public function news(){
        return $this->hasMany('App\Models\News');
    }

    public function topics(){
        return $this->hasMany('App\Models\Topic');
    }

    public function replies(){
        return $this->hasMany('App\Models\Reply');
    }
}
