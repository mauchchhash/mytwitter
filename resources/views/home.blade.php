@extends('layout')
@section('content')
  <!-- SUB Banner -->
  <div class="profile-bnr sub-bnr user-profile-bnr">
    <div class="position-center-center">
      <div class="container">
        <h2>Our Blog</h2>
      </div>
    </div>
  </div>

  <div class="blog-content pt60">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          @foreach($tweets as $tweet)
              <article class="uou-block-7f"> <img src="{{asset('img/blog-image-1.jpg')}}" alt="" class="thumb">
                <div class="meta"> <span class="time-ago">3 days ago</span> <span class="category">Posted in: <a href="#">Design</a></span> <a href="#" class="comments">12 Comments</a> </div>
                <h1><a href="/profiles/{{$tweet->user->username}}">{{$tweet->user->name}}</a></h1>
                <p>{{$tweet->body}}</p>
                <a href="#" class="btn btn-small btn-primary">Read More</a> </article>
          @endforeach
          <!-- end .uou-block-7f -->

          <!-- <div class="text&#45;center pt20"> -->
          <!--   <ul class="uou&#45;paginatin list&#45;unstyled"> -->
          <!--     <li class="active"><a href="#">1</a></li> -->
          <!--     <li><a href="#">2</a></li> -->
          <!--     <li><a href="#">3</a></li> -->
          <!--     <li><a href="#">4</a></li> -->
          <!--     <li><a href="#">5</a></li> -->
          <!--   </ul> -->
          <!-- </div> -->
        </div>
        <div class="col-md-3">
          <div class="uou-sidebar">
            <div class="search-widget">
              <form class="search-form-widget" action="#">
                <input type="text" class="search-input" placeholder="Search ...">
                <input type="submit" value="">
              </form>
            </div>
            <!-- end search-widget -->

            <!-- <h5 class="sidebar&#45;title">Categories</h5> -->
            <!-- <div class="list&#45;widget"> -->
            <!--   <ul> -->
            <!--     <li><a href="#">Creative</a></li> -->
            <!--     <li><a href="#">Design</a></li> -->
            <!--     <li><a href="#">Development</a></li> -->
            <!--     <li><a href="#">Mulitmedia</a></li> -->
            <!--     <li><a href="#">Offtopic</a></li> -->
            <!--   </ul> -->
            <!-- </div> -->

            <!-- <h5 class="sidebar&#45;title">About Us</h5> -->
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p> -->

            <!-- <h5 class="sidebar&#45;title">Connect With Us</h5> -->
            <!-- <div class="social&#45;widget"> -->
            <!--   <div class="uou&#45;block&#45;4b"> -->
            <!--     <ul class="social&#45;icons"> -->
            <!--       <li><a href="#"><i class="fa fa&#45;facebook"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;twitter"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;google&#45;plus"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;pinterest"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;dribbble"></i></a></li> -->
            <!--     </ul> -->
            <!--   </div> -->
            <!--   <!&#45;&#45; end .uou&#45;block&#45;4b &#45;&#45;>  -->
            <!-- </div> -->
            <!-- end social widget -->

            <h5 class="sidebar-title">Suggested People</h5>
            <div class="latest-post-widget">
              <div class="post-single"> <img src="{{asset('img/p-post-1.png')}}" alt="">
                <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>
                <p class="meta">January 12, 2015</p>
                <p class="meta">Design</p>
              </div>
              <div class="post-single"> <img src="{{asset('img/p-post-2.png')}}" alt="">
                <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>
                <p class="meta">January 12, 2015</p>
                <p class="meta">Design</p>
              </div>
              <div class="post-single"> <img src="{{asset('img/p-post-3.png')}}" alt="">
                <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>
                <p class="meta">January 12, 2015</p>
                <p class="meta">Design</p>
              </div>
            </div>
            <!-- end latest-post-widget -->

            <!-- <h5 class="sidebar&#45;title">Tag Cloud</h5> -->
            <!-- <div class="widget&#45;tag"> -->
            <!--   <div class="tag&#45;cloud"> <a class="btn btn&#45;primary" href="#">User Experience</a> <a class="btn btn&#45;primary" href="#">HTML 5</a> <a class="btn btn&#45;primary" href="#">Css 3</a> <a class="btn btn&#45;primary" href="#">web design</a> <a class="btn btn&#45;primary" href="#">social media</a> <a class="btn btn&#45;primary" href="#">web development</a> <a class="btn btn&#45;primary" href="#">print design</a> <a class="btn btn&#45;primary" href="#">e&#45;commerce</a> <a class="btn btn&#45;primary" href="#">java script</a> </div> -->
            <!-- </div> -->
            <!-- <h5 class="sidebar&#45;title">Archive</h5> -->
            <!-- <div class="list&#45;widget"> -->
            <!--   <ul> -->
            <!--     <li><a href="#">May 2015</a></li> -->
            <!--     <li><a href="#">April 2015</a></li> -->
            <!--     <li><a href="#">July 2015</a></li> -->
            <!--     <li><a href="#">Frbruary 2015</a></li> -->
            <!--     <li><a href="#">January 2015</a></li> -->
            <!--   </ul> -->
            <!-- </div> -->
          </div>
          <!-- end uou-sidebar --> 
        </div>
      </div>
      <!-- end row --> 

    </div>
    <!-- edn cotainer --> 

  </div>
@endsection
