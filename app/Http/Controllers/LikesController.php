<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class LikesController extends Controller
{

  public function store(Tweet $tweet){
    auth()->user()->likedTweets()->attach($tweet->id);
  }

  public function destroy(Tweet $tweet){
    auth()->user()->likedTweets()->detach($tweet->id);
  }

}
