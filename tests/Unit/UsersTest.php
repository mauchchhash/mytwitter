<?php

namespace Tests\Unit;

use App\Tweet;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  public function a_user_has_tweets(){
    $user = factory(User::class)->create();
    $this->assertInstanceOf(Collection::class, $user->tweets);
    $tweet = factory(Tweet::class)->create();
    $user = $tweet->user;
    $this->assertInstanceOf(Tweet::class, $user->tweets()->first());
  }

  /** @test */
  public function a_user_has_his_profile_path(){
    $user = factory(User::class)->create();
    $this->assertEquals('/profiles/'.$user->username, $user->path());
  }

  /** @test */
  public function a_user_has_tweets_that_he_liked(){
    $this->withoutExceptionHandling();
    $user = factory(User::class)->create();
    $this->assertInstanceOf(Collection::class, $user->likedTweets);
  }

  /** @test */
  public function a_user_has_tweets_that_he_commented_on(){
    $this->withoutExceptionHandling();
    $user = factory(User::class)->create();
    $this->assertInstanceOf(Collection::class, $user->commentedTweets);
  }

  /** @test */
  public function it_has_a_follow_path(){
    $user = factory(User::class)->create();
    $this->assertEquals('/follow/' . $user->id, $user->followPath());
  }

  /** @test */
  public function he_can_see_the_users_that_he_is_following(){
    $user = factory(User::class)->create();
    $this->assertInstanceOf(Collection::class, $user->following);
  }

  /** @test */
  public function he_can_see_his_followers(){
    $user = factory(User::class)->create();
    $this->assertInstanceOf(Collection::class, $user->followers);
  }

}
