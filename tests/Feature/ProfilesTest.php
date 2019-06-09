<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfilesTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  public function guest_cannot_view_anyones_profile(){
    $user = factory(User::class)->create();
    $this->get($user->path())->assertRedirect('/login');
  }

  /** @test */
  public function authenticated_user_can_view_his_own_profile(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $this->get(auth()->user()->path())
      ->assertStatus(200)
      ->assertSee(auth()->user()->name);
  }

  /** @test */
  public function authenticated_user_can_view_anyones_profile(){
    $this->withoutExceptionHandling();
    $this->be(factory(User::class)->create());
    $user = factory(User::class)->create();
    $this->get($user->path())->assertStatus(200);
  }

  /** @test */
  public function guest_cant_update_anyones_profile(){
    $user = factory(User::class)->create();
    $this->get('/profiles/edit/' . $user->id)->assertRedirect('/login');
    $this->patch('/profiles/edit/' . $user->id)->assertRedirect('/login');
  }

  /** @test */
  public function authenticated_user_can_update_his_own_profile(){
    $this->be(factory(User::class)->create());
    $this->get('/profiles/edit/' . auth()->user()->id)->assertStatus(200);
    $this->patch('/profiles/edit/' . auth()->user()->id)->assertStatus(200);
  }

  /** @test */
  public function authenticated_user_cant_update_anyone_elses_profile(){
    $this->be(factory(User::class)->create());
    $user = factory(User::class)->create();
    $this->get('/profiles/edit/' . $user->id)->assertStatus(403);
    $this->patch('/profiles/edit/' . $user->id)->assertStatus(403);
  }

}
