<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    public function topics(){
        return $this->hasMany('App\Models\Topic');
    }

    public function countTopicsByCategory(){
    return $this->topics()
    ->selectRaw('category_id, count(*) as topicCount')
    ->groupBy('category_id');
    }
}
