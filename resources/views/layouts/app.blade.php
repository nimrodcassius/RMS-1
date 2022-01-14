<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
        <meta name="author" content="WrapTheme, design by: ThemeMakker.com">


        <title>WHISPERS REALTORS</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="{{asset ('../assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset ('../assets/vendor/font-awesome/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset ('../assets/vendor/chartist/css/chartist.min.css')}}">
        <link rel="stylesheet" href="{{asset ('../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
        <link rel="stylesheet" href="{{asset ('../assets/vendor/toastr/toastr.min.css')}}">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset ('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset ('assets/css/color_skins.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{asset ('assets/bundles/libscripts.bundle.js')}}"></script>
        <script src="{{asset ('assets/bundles/vendorscripts.bundle.js')}}"></script>

        <script src="{{asset ('assets/bundles/chartist.bundle.js')}}"></script>
        <script src="{{asset ('assets/bundles/flotscripts.bundle.js')}}"></script> <!-- flot charts Plugin Js -->
        <script src="{{asset ('../assets/vendor/toastr/toastr.js')}}"></script>
        <script src="{{asset ('../assets/vendor/flot-charts/jquery.flot.selection.js')}}"></script>

        <script src="{{asset ('assets/bundles/mainscripts.bundle.js')}}"></script>
        <script src="{{asset ('assets/js/index.js')}}"></script>

    </head>
    <body class="theme-cyan">
      <div class="page-loader-wrapper">
          <div class="loader">
              <div class="m-t-30"><img src="{{asset ('wp-content/uploads/2021/05/12.png')}}" width="48" height="48" alt="Lucid"></div>
              <p>Please wait...</p>
          </div>
      </div>
      @include('layouts.navigation')
      <div id="main-content">
      @yield('content')
    </div>
    </body>
</html>
