<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Tweet $tweet){
        auth()->user()->commentedTweets()->attach($tweet->id, ['body' => request('body')]);
    }

    public function destroy(Tweet $tweet, $commentId){
        // auth()->user()->commentedTweets()->detach($tweet->id);
        auth()->user()->commentedTweets()->where('tweet_id', $tweet->id)->wherePivot('id', '=', $commentId)->detach();
    }
}

