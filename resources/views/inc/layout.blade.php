<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 02</title>
    {{-- <link rel="stylesheet" href="{{ asset('frontend_assets/css/all.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
  </head>
        @yield('content')
    <script src="{{ asset('frontend_assets/js/jquery-1.12.4.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend_assets/js/all.min.js') }}"></script> --}}
    <script src="{{asset('frontend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/app.js')}}"></script>
  </body>

</html>