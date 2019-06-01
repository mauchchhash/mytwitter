@extends('layout')

@section('content')
  <!-- HOME PRO-->
  <div class="home-pro"> 

    <!-- PRO BANNER HEAD -->
    <div class="banr-head">
      <div class="container">
        <div class="row"> 

          @include('layouts.startPageContent')
          <!-- FORM SECTION -->
          <div class="col-sm-5">
            <div class="login-sec"> 

              <!-- TABS -->
              <div class="uou-tabs">
                <ul class="tabs">
                  <li><a href="#register">Register Now</a></li>
                  <li class="active"><a href="#log-in">Member Login</a></li>
                </ul>

                <div class="content">
                  @include('layouts.registerForm')

                  @include('layouts.loginForm')
                  <!-- <div id="forget"> -->
                  <!--   <form> -->
                  <!--     <input type="email" placeholder="Email Address"> -->
                  <!--     <button type="submit">Login</button> -->
                  <!--   </form> -->
                  <!-- </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
