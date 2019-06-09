<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FollowsTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  public function guest_cant_follow_anyone(){
    // $this->withoutExceptionHandling();
    $followee = factory(User::class)->create();
    $this->post($followee->followPath())->assertRedirect('/login');
  }

  /** @test */
  public function guest_cant_unfollow_anyone(){
    // $this->withoutExceptionHandling();
    $followee = factory(User::class)->create();
    $this->delete($followee->followPath())->assertRedirect('/login');
  }

  /** @test */
  public function authenticated_user_can_follow_anyone(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $followee = factory(User::class)->create();
    $this->post($followee->followPath())->assertStatus(200);
    $this->assertDatabaseHas('follows', [
      'follower_id' => auth()->id(),
      'followee_id' => $followee->id
    ]);
  }

  /** @test */
  public function authenticated_user_can_unfollow_someone(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $followee = factory(User::class)->create();
    $this->post($followee->followPath())->assertStatus(200);
    $this->assertDatabaseHas('follows', [
      'follower_id' => auth()->id(),
      'followee_id' => $followee->id
    ]);
    $this->delete($followee->followPath())->assertStatus(200);
    $this->assertDatabaseMissing('follows', [
      'follower_id' => auth()->id(),
      'followee_id' => $followee->id
    ]);
  }

}
