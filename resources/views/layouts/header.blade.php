<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Read TO Lead blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--- //////////////////// -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
       <!--- //////////////////// -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!--- ////////////////////Tinymce editor -->
   <script src="https://cdn.tiny.cloud/1/u1gb8fd0u9gw9w5di32w07ytcghknsa1m7pmwhcp1g512hmw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <script>tinymce.init({
           selector: 'textarea',
			plugins: 'link code',
			menubar: false,
});</script>
   <!--- //////////////////// -->

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

       <!--///////////////// -->
     {{ Html::style('css/style.css') }}

    </head>
    <body>

    <!--/////////////////////////////////-->
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">Read<i>TO</i>Lead.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item {{ Request::is('/') ? "active" : "" }}"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item {{ Request::is('Articles') ? "active" : "" }}"><a href="{{ route('Articles.index') }}" class="nav-link">Articles</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">Team</a></li>
	          <li class="nav-item {{ Request::is('Contact') ? "active" : "" }}"><a href="{{ route('contact_path') }}" class="nav-link">Contact</a></li>
              <!--<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li> -->

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                @else
                <li class="dropdown">
                    <button href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }}<span class="caret"></span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdown-item-right">
                            <span>Your Id : <strong>{{ Auth::user()->id }}</strong></span>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
                <a class="dropdown-item" href="{{ route('Articles.index') }}">Posts</a>
                <div class="dropdown-divider"></div>
                <a href="Contact" class="dropdown-item">Contact Us</a>
                @endif

                <!--<a class="dropdown-item" href="{{ route('logout') }}">Sign out</a>-->

            </div>
        </li>
     </ul>
    </div>
  </div>
 </nav>
    <!-- END nav -->

    @yield ( 'contents' )

<div>
    @if (session()->has('message'))
     <div class="alert alert-success" role="alert">
      {{ session()->get('message') }}
      </div>
     @endif
 @if (session()->has('success'))
     <div class="alert alert-success" role="alert">
      {{ session()->get('success') }}
      </div>
 @endif
</div>


<hr>
     <!--/////////////////////////////////-->


        <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="logo"><a href="/">Read<span>TO</span>Lead.</a></h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="https://www.facebook.com/ayoub.ak.74" target="_blank"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.facebook.com/ayoub.ak.74" target="_blank"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.instagram.com/bobyveseka/" target="_blank"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                 <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">latest News</h2>
                  <div class="block-21 mb-4 d-flex">
                      <a class="img mr-4 rounded" style="background-image: url({{ asset('images/bg_1.jpg') }});"></a>
                      <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                        <div class="meta">
                          <div><a href="#"></span> Oct. 16, 2019</a></div>
                          <div><a href="#"></span> Admin</a></div>
                          <div><a href="#"></span> 19</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                      <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
                      <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                        <div class="meta">
                          <div><a href="#"></span> Oct. 16, 2019</a></div>
                          <div><a href="#"></span> Admin</a></div>
                          <div><a href="#"></span> 19</a></div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                  <h2 class="ftco-heading-2">Information</h2>
                  <ul class="list-unstyled">
                    <li><a href="/" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                    <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
                    <li><a href="Articles" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
                    <li><a href="Contact" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                      <ul>
                        <li><span class="icon icon-map-marker"></span><span class="text">11 Rue Maurice Gignoux. Résidence Le Rabot, 38000, Grenoble, France</span></li>
                        <li><a href="#"><span class="icon icon-phone"></span><span class="text">+33 767 131 184</span></a></li>
                        <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ayoubboufedjitwi@gmail.com</span></a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">

                <p>
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Dciss Rs Company
      <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="/" target="_blank">AyOuB Fatima Sihem</a>
     </p>
              </div>
            </div>
          </div>
        </footer>


<!--/////////////////////////////////



   loader -->

<div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
</div>
<!-- loader

-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

@yield('scripts')
    </body>
</html>
