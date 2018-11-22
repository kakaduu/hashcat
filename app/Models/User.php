<?php

namespace Hashcat\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'avatar', 'password', 'about'];

    public function news(){
        return $this->hasMany('Hashcat\Models\News');
    }

    public function topics(){
        return $this->hasMany('Hashcat\Models\Topic');
    }

    public function replies(){
        return $this->hasMany('Hashcat\Models\Reply');
    }
}
