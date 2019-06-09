<?php

namespace Tests\Feature;

use App\Tweet;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LikesTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  public function guest_cant_like_anyones_tweet(){
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->likePath())->assertRedirect('/login');
  }

  /** @test */
  public function guest_cant_unlike_anyones_tweet(){
    $this->be(factory(User::class)->create());
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->likePath())->assertStatus(200);
    $this->assertDatabaseHas('likes', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id
    ]);
    auth()->logout();
    $this->delete($tweet->likePath())->assertRedirect('/login');
  }

  /** @test */
  public function authenticated_user_can_like_anyones_tweets(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->likePath())->assertStatus(200);
    $this->assertDatabaseHas('likes', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id
    ]);
  }

  /** @test */
  public function authenticated_user_can_unlike_anyones_tweets(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->likePath())->assertStatus(200);
    $this->assertDatabaseHas('likes', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id
    ]);
    $this->delete($tweet->likePath())->assertStatus(200);
    $this->assertDatabaseMissing('likes', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id
    ]);
  }

}
