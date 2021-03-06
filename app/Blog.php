<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    use \Conner\Tagging\Taggable;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function comments(){
        return $this->morphMany('App\Comments','commentable');
    }
/*
    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }*/
}
