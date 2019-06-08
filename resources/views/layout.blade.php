<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Twitter - The Social Network You Have Been Waiting For!!</title>

    <!-- Fonts Online -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> --}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .bg-white {
        background:#ffffff !important;
      }
      .cl-dark{
        color: black !important;
      }
      .uou-block-2b-paddingFix{
        padding: 15px 0px 0px 0px;
      }
    </style>
  </head>

  <body>
    <div id="main-wrapper"> 

      <div class="box-shadow-for-ui">
        <div class="uou-block-2b uou-block-2b-paddingFix">
          <div class="container"> <a href="/home" class="logo"><img src="{{asset("images/logo.png")}}" alt=""></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
            <nav class="nav">
              <ul class="sf-menu">
                <li class="active"><a href="http://portfolio.uchchhash.me">Developer's Portfolio</a></li>
                @auth
                  <li class="active"><a href="{{auth()->user()->path()}}">Profile</a></li>
                  <li class='active'>
                    <form id='logout-form' action="/logout" method='POST'>
                      @csrf
                      <button class="btn btn-link bg-white active" type='submit'>Logout</button>
                    </form>
                  </li>
                @endauth
                <li class="active"><a href="/"><i class="fa fa-home"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- end .uou-block-2b --> 
      </div>

      @yield('content')

    </div>

    <div class="uou-block-4a secondary dark">
      <div class="container">
        <!-- <ul class="links"> -->
        <!--   <li><a href="#">Privacy Policy</a></li> -->
        <!--   <li><a href="#">Terms &#38;amp; Conditions</a></li> -->
        <!-- </ul> -->
        <p>Copyright &copy; 2019 Me. All Rights reserved.</p>
      </div>
    </div>
    <!-- end .uou-block-4a -->

    <div class="uou-block-11a">
      <h5 class="title">Menu</h5>
      <a href="#" class="mobile-sidebar-close">&times;</a>
      <nav class="main-nav">
        <ul>
          <li class="active"><a href="index.html">Index</a></li>
          <li> <a href="listing-filter.html">Professionals</a> </li>
          <li><a href="profile_company.html">Profile Company</a></li>
          <li><a href="profile_company-no-tabs.html">Profile Company No Tabs</a></li>
          <li><a href="user-dashboard(connections)(hotkeys-disabled).html">User Dashboard 1</a></li>
          <li><a href="user-dashboard(connections)(hotkeys-enabled).html">User Dashboard 2</a></li>
          <li><a href="user-dashboard(followers).html">User Dashboard 3</a></li>
          <li><a href="user-dashboard(following).html">User Dashboard 4</a></li>
          <li><a href="blog-post.html">Blog Post</a></li>
          <li> <a href="user-profile(layout-1).html">User Profile</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="gui-kit.html">GUI KIT</a></li>
        </ul>
      </nav>
      <hr>
    </div>

    <!-- Scripts --> 
    <script src="https://maps.googleapis.com/maps/api/js"></script> 
    <script src="js/jquery-2.1.3.min.js"></script> 
    <script src="js/bootstrap.js"></script> 
    <script src="js/plugins/superfish.min.js"></script> 
    <script src="js/jquery.ui.min.js"></script> 
    <script src="js/plugins/rangeslider.min.js"></script> 
    <script src="js/plugins/jquery.flexslider-min.js"></script> 
    <script src="js/uou-accordions.js"></script> 
    <script src="js/uou-tabs.js"></script> 
    <script src="js/plugins/select2.min.js"></script> 
    <script src="js/owl.carousel.min.js"></script> 
    <script src="js/gmap3.min.js"></script> 
    <script src="js/scripts.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </body>
</html>
