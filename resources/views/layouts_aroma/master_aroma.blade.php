<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TokuWatch - Home</title>
	<link rel="icon" href="{{asset('admin/img/Fevicon.png')}}" type="image/png">
  <link rel="stylesheet" href="{{asset('admin/vendors/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/nice-select/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
  @include('layouts_aroma.partials.header')
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    <!--================ Content start =================-->     
    @yield('content')
    <!--================ Content start =================-->

  </main>


  <!--================ Start footer Area  =================-->	
  @include('layouts_aroma.partials.footer')
	<!--================ End footer Area  =================-->


  <script src="{{asset('admin/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('admin/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendors/skrollr.min.js')}}"></script>
  <script src="{{asset('admin/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('admin/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('admin/vendors/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('admin/vendors/mail-script.js')}}"></script>
  <script src="{{asset('admin/js/main.js')}}"></script>
</body>
</html>