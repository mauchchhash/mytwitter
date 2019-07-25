<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

  public function show($username){
    $user = User::where('username', $username)->first();

    return view('profiles.show', compact('user'));
  }

  public function edit(User $user){
    if(auth()->user()->isNot($user)){
      abort(403);
    }
    return view('profiles.edit', compact('user'));
  }

  public function update(User $user){
    if(auth()->user()->isNot($user)){
      abort(403);
    }
    // return back();
  }

}
