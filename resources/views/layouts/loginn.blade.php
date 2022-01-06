<!doctype html>
<html lang="en">

<head>
<title>:: Lucid Hospital :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset ('../assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset ('../assets/vendor/font-awesome/css/font-awesome.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset ('assets/css/color_skins.css')}}">
</head>
<body class="theme-cyan">
  <div class="page-loader-wrapper">
      <div class="loader">
          <div class="m-t-30"><img src="{{asset ('../assets/images/logo-icon.svg')}}" width="48" height="48" alt="Lucid"></div>
          <p>Please wait...</p>
      </div>
  </div>
  @include('layouts.navigation')
  <div id="main-content">
  @yield('content')
</div>
</body>
</html>
