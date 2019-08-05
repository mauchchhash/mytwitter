@extends('layout')
@section('content')
  <div class="compny-profile"> 
    <!-- SUB Banner -->
    <div class="profile-bnr user-profile-bnr">
      <div class="container">
        <div class="pull-left">
          {{-- <h2>{{ ucwords(strtolower($user->name)) }}</h2> --}}
          <h2>{{ $user->name }}</h2>
        </div>

        <!-- Top Right Button -->
        <div class="right-top-bnr">
          <div class="connect"> 
            <a href="#." data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Connect</a> 
            <a href="#."><i class="fa fa-share-alt"></i> Share</a>
            <a href="#"><i class="fa fa-edit"></i>Edit</a>
            <div class="bt-ns">
              <a href="#."><i class="fa fa-bookmark-o"></i></a>
              <a href="#."><i class="fa fa-envelope-o"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal POPUP -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="container">
              <h6><a class="close" href="#." data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a> Send Message</h6>

              <!-- Forms -->
              <form action="#">
                <ul class="row">
                  <li class="col-xs-6">
                    <input type="text" placeholder="First Name ">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Last Name">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Country">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Email">
                  </li>
                  <li class="col-xs-12">
                    <textarea placeholder="Your Message"></textarea>
                  </li>
                  <li class="col-xs-12">
                    <button class="btn btn-primary">Send message</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Profile Company Content -->
    <div class="profile-company-content user-profile main-user" data-bg-color="f5f5f5">
      <div class="container">
        <div class="row"> 

          <!-- Nav Tabs -->
          <div class="col-md-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
              <li><a data-toggle="tab" href="#tweet-tab">Tweets</a></li>
              <li><a data-toggle="tab" href="#flowrs-tabs">Followers (241)</a></li>
              <li><a data-toggle="tab" href="#foll-tabs">Following</a></li>
            </ul>
          </div>

          <!-- Tab Content -->
          <div class="col-md-12">
            <div class="tab-content"> 

              <!-- PROFILE -->
              <div id="profile" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-md-12">
                    <div class="profile-main">
                      <h3>About</h3>
                      <div class="profile-in">
                        <div class="media-left">
                          <div class="img-profile"> <img class="media-object" src="{{asset('images/avatar-1.jpg')}}" alt=""> </div>
                        </div>
                        <div class="media-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquidautem 
                          laudantium sapiente ad enim ipsa modi labo rum accusantium deleniti neque architecto vitae.<br>
                          <br>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo
                          itate id molestiae consectetur quae pariatur repudi andae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut imcati 
                          nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda. <br>
                          <br>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8"> 


                    <!-- People you may want to follow -->
                    <div class="sidebar">
                      <h5 class="main-title">People You May Want to Follow</h5>

                      <!-- Similar -->
                      <div class="similar">
                        <div class="media">
                          <div class="media-left">
                            <div class="inn-simi"> <img class="media-object" src="{{asset('images/med-avatar.jpg')}}" alt=""> <a href="#">Profile </a> </div>
                          </div>
                          <div class="media-body">
                            <h5>Media heading</h5>
                            <p>SEO Specialist - New York, USA</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, 
                            voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum 
                            accusantium deleniti neque architecto vitae.</p>

                            <!-- Share -->
                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                          </div>
                        </div>

                        <!-- Similar -->
                        <div class="media">
                          <div class="media-left">
                            <div class="inn-simi"> <img class="media-object" src="{{asset('images/med-avatar.jpg')}}" alt=""> <a href="#">Profile </a> </div>
                          </div>
                          <div class="media-body">
                            <h5>Denise Walsh</h5>
                            <p>SEO Specialist - New York, USA</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, 
                            voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum 
                            accusantium deleniti neque architecto vitae.</p>

                            <!-- Share -->
                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                          </div>
                        </div>

                        <!-- Similar -->
                        <div class="media">
                          <div class="media-left">
                            <div class="inn-simi"> <img class="media-object" src="{{asset('images/med-avatar.jpg')}}" alt=""> <a href="#">Profile </a> </div>
                          </div>
                          <div class="media-body">
                            <h5>Denise Walsh</h5>
                            <p>SEO Specialist - New York, USA</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, 
                            voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum 
                            accusantium deleniti neque architecto vitae.</p>

                            <!-- Share -->
                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Col -->
                  <div class="col-md-4"> 

                    <!-- Overview -->
                    <div class="sidebar">
                      <h5 class="main-title">Overview</h5>
                      <div class="sidebar-information">
                        <ul class="single-category">
                          <li class="row">
                            <h6 class="title col-xs-6">Age</h6>
                            <span class="subtitle col-xs-6">38 Years Old</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Location</h6>
                            <span class="subtitle col-xs-6">Jordan Amman</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">E-mail</h6>
                            <span class="subtitle col-xs-6">{{$user->email}}</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Website</h6>
                            <span class="subtitle col-xs-6"><a href="#.">example.com </a></span></li>
                        </ul>
                      </div>
                    </div>

                    <!-- Professional Details -->
                    <div class="sidebar">
                      <h5 class="main-title">Professional Details</h5>
                      <div class="sidebar-information">
                        <ul class="single-category">
                          <li class="row">
                            <h6 class="title col-xs-6">Working At</h6>
                            <span class="subtitle col-xs-6">Company name</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Post</h6>
                            <span class="subtitle col-xs-6">Front End Developer</span></li>
                        </ul>
                      </div>
                    </div>


                  </div>
                </div>
              </div>

              {{-- <!-- Portfolio --> --}}
              {{-- <div id="portfolio" class="tab-pane fade"> --}}
              {{--   <div class="profile-main"> --}}
              {{--     <h3>Portfolio</h3> --}}
              {{--     <div class="profile-in"> --}}
              {{--       <div class="uou-portfolio">  --}}
              {{--         <!-- Portfolio Item --> --}}
              {{--         <section class="portfolio"> --}}
              {{--           <div class="portfolio-filters-content">  --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="development design"> <a href="{{asset('img/portfolio-1.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-1.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="design"> <a href="{{asset('img/portfolio-2.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-2.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="development branding"> <a href="{{asset('img/portfolio-3.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-3.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="development design"> <a href="{{asset('img/portfolio-6.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-6.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="branding development"> <a href="{{asset('img/portfolio-4.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-4.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="mobile branding"> <a href="{{asset('img/portfolio-5.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-5.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="branding"> <a href="{{asset('img/portfolio-7.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-7.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="branding"> <a href="{{asset('img/portfolio-2.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-2.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--             <!-- Portfolio Item --> --}}
              {{--             <article class="design development"> <a href="{{asset('img/portfolio-8.jpg')}}" class="swipebox"> <img src="{{asset('img/portfolio-8.jpg')}}" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article> --}}
              {{--           </div> --}}
              {{--         </section> --}}
              {{--       </div> --}}
              {{--       <!-- end uou-portfolio -->  --}}
              {{--     </div> --}}
              {{--   </div> --}}
              {{-- </div> --}}

              <!-- Blog Post -->
              <div id="tweet-tab" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Tweets</h3>
                  <div class="profile-in">
                    <div class="row">
                      <div class="col-md-12">
                        <article class="uou-block-7f"> <img src="{{asset('img/blog-image-1.jpg')}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">3 days ago</span> <span class="category">Posted in: <a href="#">Design</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">Perspiciatis Sint Pariatur Velit Corrupti</a></h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
                          <a href="#" class="btn btn-small btn-primary">Read More</a> </article>
                        <!-- end .uou-block-7f -->

                        <article class="uou-block-7f"> <img src="{{asset('img/blog-image-2.jpg')}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">3 days ago</span> <span class="category">Posted in: <a href="#">Design</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">Perspiciatis Sint Pariatur Velit Corrupti</a></h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
                          <a href="#" class="btn btn-small btn-primary">Read More</a> </article>
                        <!-- end .uou-block-7f -->

                        <article class="uou-block-7f"> <img src="{{asset('img/blog-image-3.jpg')}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">3 days ago</span> <span class="category">Posted in: <a href="#">Design</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">Perspiciatis Sint Pariatur Velit Corrupti</a></h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
                          <a href="#" class="btn btn-small btn-primary">Read More</a> </article>
                        <!-- end .uou-block-7f -->

                        <article class="uou-block-7f"> <img src="{{asset('img/blog-image-4.jpg')}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">3 days ago</span> <span class="category">Posted in: <a href="#">Design</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">Perspiciatis Sint Pariatur Velit Corrupti</a></h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
                          <a href="#" class="btn btn-small btn-primary">Read More</a> </article>
                        <!-- end .uou-block-7f -->

                        <article class="uou-block-7f"> <img src="{{asset('img/blog-image-5.jpg')}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">3 days ago</span> <span class="category">Posted in: <a href="#">Design</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">Perspiciatis Sint Pariatur Velit Corrupti</a></h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
                          <a href="#" class="btn btn-small btn-primary">Read More</a> </article>
                        <!-- end .uou-block-7f -->

                        <div class="text-center pt20">
                          <ul class="uou-paginatin list-unstyled">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end row --> 

                    <!-- end blog-content --> 

                  </div>
                </div>
              </div>

              <!-- Blog Post -->
              <div id="Con-tab" class="tab-pane fade">
                <div class="profile-main">
                  <h3>People in Connections</h3>
                  <div class="profile-in">
                    <div class="folow-persons">
                      <ul>

                        <!-- MEMBER -->
                        <li>
                          <div class="row">
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-1" class="styled" type="checkbox">
                                <label for="checkbox1-1"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-2" class="styled" type="checkbox">
                                <label for="checkbox1-2"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-3" class="styled" type="checkbox">
                                <label for="checkbox1-3"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-4" class="styled" type="checkbox">
                                <label for="checkbox1-4"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-5" class="styled" type="checkbox">
                                <label for="checkbox1-5"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-6" class="styled" type="checkbox">
                                <label for="checkbox1-6"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-7" class="styled" type="checkbox">
                                <label for="checkbox1-7"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Blog Post -->
              <div id="flowrs-tabs" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Followers</h3>
                  <div class="profile-in">
                    <div class="folow-persons">
                      <ul>

                        <!-- MEMBER -->
                        <li>
                          <div class="row">
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-1" class="styled" type="checkbox">
                                <label for="checkbox2-1"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-2" class="styled" type="checkbox">
                                <label for="checkbox2-2"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-3" class="styled" type="checkbox">
                                <label for="checkbox2-3"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-4" class="styled" type="checkbox">
                                <label for="checkbox2-4"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-5" class="styled" type="checkbox">
                                <label for="checkbox2-5"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-6" class="styled" type="checkbox">
                                <label for="checkbox2-6"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-7" class="styled" type="checkbox">
                                <label for="checkbox2-7"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Blog Post -->
              <div id="foll-tabs" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Following</h3>
                  <div class="profile-in">
                    <div class="folow-persons">
                      <ul>

                        <!-- MEMBER -->
                        <li>
                          <div class="row">
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-1" class="styled" type="checkbox">
                                <label for="checkbox3-1"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-2" class="styled" type="checkbox">
                                <label for="checkbox3-2"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-3" class="styled" type="checkbox">
                                <label for="checkbox3-3"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-4" class="styled" type="checkbox">
                                <label for="checkbox3-4"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-5" class="styled" type="checkbox">
                                <label for="checkbox3-5"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-6" class="styled" type="checkbox">
                                <label for="checkbox3-6"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>

                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-7" class="styled" type="checkbox">
                                <label for="checkbox3-7"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="{{asset('images/sm-avatar.jpg')}}" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
