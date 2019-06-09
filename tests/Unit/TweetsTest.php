<?php

namespace Tests\Unit;

use App\Tweet;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TweetsTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  public function it_belongs_to_a_user(){
    $tweet = factory(Tweet::class)->create();
    $this->assertInstanceOf(User::class, $tweet->user);
  }

  /** @test */
  public function it_has_a_path(){
    $tweet = factory(Tweet::class)->create();
    $this->assertEquals('/tweets/'.$tweet->id, $tweet->path());
  }

  /** @test */
  public function it_has_a_like_path(){
    $tweet = factory(Tweet::class)->create();
    $this->assertEquals('/like/'.$tweet->id, $tweet->likePath());
  }

  /** @test */
  public function it_has_a_comment_path(){
    $tweet = factory(Tweet::class)->create();
    $this->assertEquals('/comment/'.$tweet->id, $tweet->commentPath());
  }

  /** @test */
  public function it_has_users_that_liked_it(){
    $this->withoutExceptionHandling();
    $tweet = factory(Tweet::class)->create();
    $this->assertInstanceOf(Collection::class, $tweet->likers);
  }

  /** @test */
  public function it_has_users_that_commented_on_it(){
    $this->withoutExceptionHandling();
    $tweet = factory(Tweet::class)->create();
    $this->assertInstanceOf(Collection::class, $tweet->commenters);
  }

}
