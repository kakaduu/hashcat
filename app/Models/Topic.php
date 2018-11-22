<?php

namespace Hashcat\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'body'];
    public function topics(){
        return $this->hasMany('Hashcat\Models\Topic');
    }

    public function countTopicsByCategory(){
    return $this->topics()
    ->selectRaw('category_id, count(*) as topicCount')
    ->groupBy('category_id');
    }
}
