<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];


    public function author() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function posts() {
        return $this->belongTo('App\Berita', 'news_id');
    }
}
