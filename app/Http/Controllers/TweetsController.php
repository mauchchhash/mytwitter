<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TweetsController extends Controller
{
  public function index(){
    $tweets = auth()->user()->tweets->reverse();
    foreach( auth()->user()->following as $user ){
      $tweets = $tweets->concat($user->tweets);
    }

    return view('home', compact('tweets'));
  }

  public function store(){
    $attributes = request()->validate(['body' => 'required']);

    auth()->user()->tweets()->create($attributes);

    return redirect('/home');
  }

  public function show(Tweet $tweet){
    return view('tweets.show', compact('tweet'));
  }

}
