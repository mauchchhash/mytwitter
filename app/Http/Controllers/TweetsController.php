<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
  public function index(){
    $tweets = Tweet::all();

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
