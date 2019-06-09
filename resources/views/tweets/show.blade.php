@extends('layout')
@section('content')
  <div class="blog-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <article class="uou-block-7f blog-post-content">
            {{-- <img src="{{asset('img/b-post-image.jpg')}}" alt=""> --}}

            <div class="meta">
              <span class="time-ago">3 days ago</span>
              <span class="category">Posted in: <a href="#">Design</a></span>
              <a href="#" class="comments">12 Comments</a>
            </div>

            <h1><a href="{{$tweet->user->path()}}">{{$tweet->user->name}}</a></h1>

            <p>{{$tweet->body}}</p>


            <div class="uou-share-story clearfix">
              <div class="row">
                <div class="col-sm-3">
                  <h5 class="sidebar-title">Share This Story</h5>

                </div>
                <div class="col-sm-9 ">
                  <div class="social-widget">
                    <div class="uou-block-4b">

                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      </ul>

                    </div> <!-- end .uou-block-4b -->
                  </div> <!-- end social widget -->
                </div>
              </div>
            </div>

            <a class="btn btn-primary" href="/home/">Back to Home</a>

          </article> <!-- end .uou-block-7f -->

          <div class="uou-post-comment">
            <aside class="uou-block-14a">
              <h5 class="sidebar-title">Comments(<span>2</span>)</h5>
              <ul>
                <li>
                  <article class="comment">
                    <img src="{{asset('img/p-post-1.png')}}" alt="">

                    <div>
                      <header>
                        <a href="#" class="user">Jessica Walsh -</a>

                        <span class="time-ago">May 13, 2015(11.25)</span>
                        <a href="#" class="reply">Reply</a>
                      </header>

                      <p>Veniam minus obcaecati, quos facere et quibusdam debitis iure voluptate libero voluptas dolorem praesentium rerum adipisci ad fuga, odio molestiae. Soluta quos vel pariatur nemo fugit repellat. nemo fugit repellat</p>
                    </div>
                  </article>
                </li>

                <li>
                  <article class="comment">
                    <img src="{{asset('img/p-post-1.png')}}" alt="">

                    <div>
                      <header>
                        <a href="#" class="user">Jessica Walsh -</a>

                        <span class="time-ago">May 13, 2015(11.25)</span>
                        <a href="#" class="reply">Reply</a>
                      </header>

                      <p>Veniam minus obcaecati, quos facere et quibusdam debitis iure voluptate libero voluptas dolorem praesentium rerum adipisci ad fuga, odio molestiae. Soluta quos vel pariatur nemo fugit repellat. nemo fugit repellat</p>
                    </div>
                  </article>
                </li>

              </ul>
            </aside> <!-- end .uou-block-14a -->

            <h4>Join Conversation</h4>

            <div class="uou-post-comment-form">
              <form role= "form">
                <div class="row">
                  <div class="col-sm-4">
                    <input type="text" placeholder="Name">
                  </div>
                  <div class="col-sm-4">
                    <input type="email" placeholder="E-mail">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" placeholder="Website">
                  </div>

                  <div class="col-sm-12">
                    <textarea placeholder="Your comment"></textarea>
                  </div>

                  <div class="col-sm-12">
                    <button class="btn btn-primary">Add Comment</button>
                  </div>

                </div> <!-- end row -->
              </form>
            </div>

          </div>


        </div> <!-- end grid layout -->

        <div class="col-md-3">
          <div class="uou-sidebar">

            <!-- <div class="search&#45;widget"> -->
            <!--   <form class="search&#45;form&#45;widget" action="#"> -->
            <!--     <input type="text" class="search&#45;input" placeholder="Search ..."> -->
            <!--     <input type="submit" value=""> -->
            <!--   </form> -->
            <!-- </div> <!&#45;&#45; end search&#45;widget &#45;&#45;> -->

            <!-- <h5 class="sidebar&#45;title">Categories</h5> -->
            <!--  -->
            <!-- <div class="list&#45;widget"> -->
            <!--   <ul> -->
            <!--     <li><a href="#">Creative</a></li> -->
            <!--     <li><a href="#">Design</a></li> -->
            <!--     <li><a href="#">Development</a></li> -->
            <!--     <li><a href="#">Mulitmedia</a></li> -->
            <!--     <li><a href="#">Offtopic</a></li> -->
            <!--  -->
            <!--   </ul> -->
            <!-- </div> -->


            <!-- <h5 class="sidebar&#45;title">About Us</h5> -->
            <!--  -->
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p> -->


            <!-- <h5 class="sidebar&#45;title">Connect With Us</h5> -->
            <!--  -->
            <!-- <div class="social&#45;widget"> -->
            <!--   <div class="uou&#45;block&#45;4b"> -->
            <!--  -->
            <!--     <ul class="social&#45;icons"> -->
            <!--       <li><a href="#"><i class="fa fa&#45;facebook"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;twitter"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;google&#45;plus"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;pinterest"></i></a></li> -->
            <!--       <li><a href="#"><i class="fa fa&#45;dribbble"></i></a></li> -->
            <!--     </ul> -->
            <!--  -->
            <!--   </div> <!&#45;&#45; end .uou&#45;block&#45;4b &#45;&#45;> -->
            <!-- </div> <!&#45;&#45; end social widget &#45;&#45;> -->

            <h5 class="sidebar-title">Suggested People</h5>
            <div class="similar">
              <div class="media">
                <div class="media-left">
                  <div class="inn-simi"> <img class="media-object" src="{{asset('images/med-avatar.jpg')}}" alt=""></div>
                </div>
                <div class="media-body">
                  <a href="#"><h6>Media heading</h6></a>
                </div>
              </div>

              <!-- Similar -->
              <div class="media">
                <div class="media-left">
                  <div class="inn-simi"> <img class="media-object" src="{{asset('images/med-avatar.jpg')}}" alt=""> </div>
                </div>
                <div class="media-body">
                  <a href="#"><h6>Denise Walsh</h6></a>
                </div>
              </div>

              <!-- Similar -->
              <div class="media">
                <div class="media-left">
                  <div class="inn-simi"> <img class="media-object" src="{{asset('images/med-avatar.jpg')}}" alt=""> </div>
                </div>
                <div class="media-body">
                  <a href="#"><h6>Denise Walsh</h6></a>
                </div>
              </div>
            </div>


            <!-- <h5 class="sidebar&#45;title">Tag Cloud</h5> -->
            <!--  -->
            <!-- <div class="widget&#45;tag"> -->
            <!--   <div class="tag&#45;cloud"> -->
            <!--     <a class="btn btn&#45;primary" href="#">User Experience</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">HTML 5</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">Css 3</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">web design</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">social media</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">web development</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">print design</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">e&#45;commerce</a> -->
            <!--     <a class="btn btn&#45;primary" href="#">java script</a> -->
            <!--   </div> -->
            <!--  -->
            <!-- </div> -->

            <!-- <h5 class="sidebar&#45;title">Archive</h5> -->
            <!--  -->
            <!-- <div class="list&#45;widget"> -->
            <!--   <ul> -->
            <!--     <li><a href="#">May 2015</a></li> -->
            <!--     <li><a href="#">April 2015</a></li> -->
            <!--     <li><a href="#">July 2015</a></li> -->
            <!--     <li><a href="#">Frbruary 2015</a></li> -->
            <!--     <li><a href="#">January 2015</a></li> -->
            <!--  -->
            <!--   </ul> -->
            <!-- </div> -->


          </div> <!-- end uou-sidebar -->
        </div>

      </div> <!-- end row -->

    </div> <!-- edn cotainer -->

  </div> <!-- end blog-content -->












  </div>
  <!-- end #main-wrapper -->

  <!-- Footer -->
  <!-- <div class="uou&#45;block&#45;4e"> -->
  <!--   <div class="container"> -->
  <!--     <div class="row"> -->
  <!--       <div class="col&#45;md&#45;3 col&#45;sm&#45;6"> <a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt=""></a> -->
  <!--         <ul class="contact&#45;info has&#45;bg&#45;image contain" data&#45;bg&#45;image="images/footer&#45;map&#45;bg.png"> -->
  <!--           <li> <i class="fa fa&#45;map&#45;marker"></i> -->
  <!--             <address> -->
  <!--               795 Folsom Ave, Suite 600, San Francisco, CA 94107 -->
  <!--             </address> -->
  <!--           </li> -->
  <!--           <li> <i class="fa fa&#45;phone"></i> <a href="tel:#">(123) 456&#45;7890</a> </li> -->
  <!--           <li> <i class="fa fa&#45;envelope"></i> <a href="mailto:#">first.last@example.com</a> </li> -->
  <!--         </ul> -->
  <!--       </div> -->
  <!--       <div class="col&#45;md&#45;3 col&#45;sm&#45;6"> -->
  <!--         <h5>Twitter Feed</h5> -->
  <!--         <ul class="twitter&#45;feed"> -->
  <!--           <li> RT <a href="#">@no1son</a>: Now this <a href="#">http://t.co/TSfMW1qMAW</a> is one hell of a stunning site!!! Awesome work guys <a href="#">@AIRNAUTS</a> <a href="#" class="time">May 25</a> </li> -->
  <!--           <li> Check out the wordpress version of Tucson &#45; <a href="#">http://t.co/sBlU3GbapT</a> <a href="#" class="time">May 22</a> </li> -->
  <!--         </ul> -->
  <!--       </div> -->
  <!--       <div class="col&#45;md&#45;3 col&#45;sm&#45;6"> -->
  <!--         <h5>Photostream</h5> -->
  <!--         <ul class="photos&#45;list"> -->
  <!--           <li><img src="{{asset('images/photostream4.jpg')}}" alt=""></li> -->
  <!--           <li><img src="{{asset('images/photostream6.jpg')}}" alt=""></li> -->
  <!--           <li><img src="{{asset('images/photostream3.jpg')}}" alt=""></li> -->
  <!--           <li><img src="{{asset('images/photostream2.jpg')}}" alt=""></li> -->
  <!--           <li><img src="{{asset('images/photostream1.jpg')}}" alt=""></li> -->
  <!--           <li><img src="{{asset('images/photostream.jpg')}}" alt=""></li> -->
  <!--         </ul> -->
  <!--       </div> -->
  <!--       <div class="col&#45;md&#45;3 col&#45;sm&#45;6"> -->
  <!--         <h5>Newsletter</h5> -->
  <!--         <p>Subscribe to our newsletter to receive our latest news and updates. We do not spam.</p> -->
  <!--         <form class="newsletter&#45;form" action="#"> -->
  <!--           <input type="email" placeholder="Enter your email address"> -->
  <!--           <input type="submit" class="btn btn&#45;primary" value="Subscribe"> -->
  <!--         </form> -->
  <!--       </div> -->
  <!--     </div> -->
  <!--   </div> -->
  <!-- </div> -->
  <!-- end .uou-block-4e -->
@endsection
