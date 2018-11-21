<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'body'];
    public function topics(){
        return $this->hasMany('App\Models\Topic');
    }

    public function countTopicsByCategory(){
    return $this->topics()
    ->selectRaw('category_id, count(*) as topicCount')
    ->groupBy('category_id');
    }
}
