<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{asset('images/icon/flaticon.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('foxtl/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('foxtl/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('foxtl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('foxtl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('foxtl/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('foxtl/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('foxtl/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('foxtl/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('foxtl/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('foxtl/css/style.css')}}">
  </head>
  <body>

    <!-- START nav -->
    @include('foxtl/partials/navbarfox')
    <!-- END nav -->

    @yield('content')

    <!-- START footer -->
    @include('foxtl/partials/footerfox')
    <!-- END footer -->


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Script -->
  <script src="{{asset('foxtl/js/jquery.min.js')}}"></script>
  <script src="{{asset('foxtl/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('foxtl/js/popper.min.js')}}"></script>
  <script src="{{asset('foxtl/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('foxtl/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('foxtl/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('foxtl/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('foxtl/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('foxtl/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('foxtl/js/aos.js')}}"></script>
  <script src="{{asset('foxtl/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('foxtl/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('foxtl/js/google-map.js')}}"></script>
  <script src="{{asset('foxtl/js/main.js')}}"></script>

  @include('sweetalert::alert')
  </body>
</html>
