<?php

namespace Tests\Feature;

use App\Tweet;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TweetsTest extends TestCase
{
  use RefreshDatabase, WithFaker;

  /** @test */
  public function guest_cannot_post_tweets(){
    $attributes = factory(Tweet::class)->raw();
    $this->post('/tweets', $attributes)->assertRedirect('/login');
  }

  /** @test */
  public function authenticated_user_can_create_a_tweet(){
    $this->be(factory(User::class)->create());
    $attributes = ['body' => 'This is my first tweet'];
    $this->post('/tweets', $attributes)
      ->assertRedirect('/home');
    $this->assertDatabaseHas('tweets', $attributes);
    $this->get('/home')->assertSee($attributes['body']);
  }

  /** @test */
  public function a_tweet_must_have_a_body(){
    $this->be(factory(User::class)->create());
    $attributes = factory(Tweet::class)->raw(['body' => '']);
    $this->post('/tweets', $attributes)->assertSessionHasErrors('body');
  }

  /** @test */
  public function guest_cannot_view_anyones_tweets(){
    $tweet = factory(Tweet::class)->create();
    $this->get($tweet->path())->assertRedirect('/login');
  }

  /** @test */
  public function authenticated_user_can_view_anyones_tweet(){
    $this->be(factory(User::class)->create());
    $tweet = factory(Tweet::class)->create();
    $this->get($tweet->path())->assertStatus(200);
  }

}
