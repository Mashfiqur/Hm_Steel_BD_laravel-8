<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HM Steel BD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link href="{{asset('css/ jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/aos.css')}}" rel="stylesheet">
   
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
   @yield('css')
   
</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <!-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
<div class="container">
      
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
          <a href="{{ url('/') }}">
          <img  src="{{asset('images/logo.png')}}"  alt="Steel" style="height:50px;width:140px;">
</a>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block py-1 text-light" style="background-color: rgba(0,0,0, 0.4);">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-2 d-none d-lg-block">
                <li id="navBtn"><a href="{{ url('/') }}" class="nav-link"><b>Home</b></a></li>
                <li  id="navBtn"><a href="{{ url('/about') }}" class="nav-link"><b>About Us</b></a></li>
                <li  id="navBtn"><a href="{{ url('/contact') }}" class="nav-link"><b>Contact Us</b></a></li>
               
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
        </div>
      
    </header>


            @yield('container')

<footer class="footer-distributed" id="footer-section">
<div class="container">
<div class="footer-left">

    <h3>Company<span>logo</span></h3>

    <p class="footer-links">
        <a href="{{ url('/') }}" class="link-1">Home</a>
        
        
    
        
    
        <a href="{{ url('/about') }}">About</a>
        
        
        
        <a href="{{ url('/') }}">Contact</a>
    </p>

    <p class="footer-company-name">HM STEEL BD © 2020</p>
</div>

<div class="footer-center mr-2">

    <div>
        <i class="fa fa-map-marker"></i>
        <p>3 Bankside Park, 28 Thames Road, Barking, IG11 0HZ</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>01407070302</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">info@westacebd.com</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>About the company</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>

    <div class="footer-icons">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

    </div>

</div>
</div>
</footer>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>


<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

    @yield('js')

</body>
</html>