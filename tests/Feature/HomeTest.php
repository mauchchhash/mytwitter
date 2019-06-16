<?php

namespace Tests\Feature;

use App\User;
use App\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  public function guest_cant_visit_homepage(){
    $this->get('/home')->assertRedirect('/login');
  }

  /** @test */
  public function user_can_see_tweets_of_people_he_is_following_in_homepage(){
    $followee1 = factory(User::Class)->create();
    $followee2 = factory(User::Class)->create();

    $this->be(factory(User::class)->create());
    $this->post($followee1->followPath());
    $this->post($followee2->followPath());

    $tweet1 = factory(Tweet::class)->create(['user_id' => $followee1->id]);
    $tweet2 = factory(Tweet::class)->create(['user_id' => $followee2->id]);

    $this->get('/home')->assertSee($tweet1->body);
    $this->get('/home')->assertSee($tweet2->body);
  }

}

