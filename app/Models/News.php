<?php

namespace Hashcat\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'body', 'pic'];
    public function users(){
        return $this->belongsToMany('Hashcat\Models\User');
    }
    public function topics(){
        return $this->belongsToMany('Hashcat\Models\Topic');
    }

}
