<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user){
        auth()->user()->following()->attach($user);
    }

    public function destroy(User $user){
        auth()->user()->following()->detach($user);
    }

}

