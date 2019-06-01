<?php

namespace App;

use App\Tweet;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets(){
        return $this->hasMany(Tweet::class);
    }

    public function path(){
        return '/profiles/'.$this->username;
    }

    public function likedTweets(){
        return $this->belongsToMany(Tweet::class, 'likes');
    }

    public function commentedTweets(){
        return $this->belongsToMany(Tweet::class, 'comments')
            ->as('comment')
            ->withPivot(['id' , 'body']);
    }

    public function followPath(){
        return '/follow/' . $this->id;
    }

    public function following(){
        return $this->belongsToMany(User::class, 'follows', 'follower_id', 'followee_id');
    }

    public function followers(){
        return $this->belongsToMany(User::class, 'follows', 'followee_id', 'follower_id');
    }

}
