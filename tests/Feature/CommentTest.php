<?php

namespace Tests\Feature;

use App\Tweet;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
  use RefreshDatabase, WithFaker;

  /** @test */
  public function guest_cant_comment_on_anyones_tweet(){
    // $this->withoutExceptionHandling();
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->commentPath())->assertRedirect('/login');
  }

  /** @test */
  public function guest_cant_delete_any_comment(){
    $this->be(factory(User::class)->create());
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->commentPath(), ['body' => ($body = $this->faker->sentence)])->assertStatus(200);
    $this->assertDatabaseHas('comments', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id,
      'body' => $body
    ]);
    $commentId = auth()->user()->commentedTweets()->first()->comment->id;
    auth()->logout();
    $this->delete($tweet->commentPath() . '/' . $commentId)->assertRedirect('/login');
  }

  /** @test */
  public function authenticated_user_can_comment_on_anyones_tweet(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->commentPath(), ['body' => ($body = $this->faker->sentence)])->assertStatus(200);
    $this->assertDatabaseHas('comments', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id,
      'body' => $body
    ]);
    $this->assertEquals(auth()->user()->commentedTweets()->first()->comment->body, $body);
  }

  /** @test */
  public function authenticated_user_can_delete_his_comment_on_anyones_tweet(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $tweet = factory(Tweet::class)->create();
    $this->post($tweet->commentPath(), ['body' => ($body = $this->faker->sentence)])->assertStatus(200);
    $this->assertDatabaseHas('comments', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id,
      'body' => $body
    ]);
    $this->assertEquals(auth()->user()->commentedTweets()->first()->comment->body, $body);
    $commentId = auth()->user()->commentedTweets()->first()->comment->id;
    // dd($commentId);
    $this->delete($tweet->commentPath() . '/'. $commentId)->assertStatus(200);
    $this->assertDatabaseMissing('comments', [
      'user_id' => auth()->user()->id,
      'tweet_id' => $tweet->id,
      'body' => $body
    ]);
  }
}
