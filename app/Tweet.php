<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function path(){
        return '/tweets/' . $this->id;
    }

    public function likePath(){
        return '/like/' . $this->id;
    }

    public function likers(){
        return $this->belongsToMany(User::class, 'likes');
    }

    public function commentPath(){
        return '/comment/' . $this->id;
    }

    public function commenters(){
        return $this->belongsToMany(User::class, 'comments')
            ->as('comment')
            ->withPivot(['id' , 'body']);
    }

}
