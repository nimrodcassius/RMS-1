<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WHISPERS REALTORS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <header id="qodef-page-header">
<div id="qodef-page-header-inner" class="">
<a itemprop="url" class="qodef-header-logo-link qodef-height--not-set" href="{{url ('/')}}" rel="home">
<img width="84" height="84" src="{{asset ('wp-content/uploads/2021/05/logo-img-2.png')}}" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
<img width="84" height="84" src="{{asset ('wp-content/uploads/2021/05/logo-img-2.png')}}" class="qodef-header-logo-image qodef--dark" alt="logo dark" itemprop="image" /> <img width="84" height="84"
src="{{asset ('wp-content/uploads/2021/05/logo-img-2.png')}}" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image" /></a>
<nav class="qodef-header-navigation" role="navigation" aria-label="Top Menu">
 </nav>
<div class="qodef-widget-holder qodef--one">
<div id="text-2" class="widget widget_text qodef-header-widget-area-one" data-area="header-widget-one">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
      @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                  @endif
              @endauth
          </div>
      @endif
    </div>
</div>

<div id="fokkner_core_side_area_opener-2" class="widget widget_fokkner_core_side_area_opener qodef-header-widget-area-one" data-area="header-widget-one"><a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--svg-path qodef-side-area-opener" style="margin: 0px 0px 0px 15px">
<span class="qodef-m-icon qodef--open">
<svg class="qodef-svg-icon-open" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 21 21" width="21" height="21" xml:space="preserve">
<g>
<rect width="8" height="8" />
<rect x="13" width="8" height="8" />
<rect y="13" width="8" height="8" />
<rect x="13" y="13" width="8" height="8" />
</g>
</svg> </span>
</a>
</div> </div>
</div>
<div class="qodef-header-sticky qodef-custom-header-layout qodef-appearance--down">
<div class="qodef-header-sticky-inner ">
<a itemprop="url" class="qodef-header-logo-link qodef-height--not-set" href="https://fokkner.qodeinteractive.com/" rel="home">
<img width="84" height="84" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/logo-img-2.png" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" /> <img width="84" height="84" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/logo-img-2.png" class="qodef-header-logo-image qodef--dark" alt="logo dark" itemprop="image" /> <img width="84" height="84" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/logo-img-2.png" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image" /></a>
<nav class="qodef-header-navigation" role="navigation" aria-label="Top Menu">
</ul> </nav>
<div class="qodef-widget-holder qodef--one">
<div class="qodef-widget-holder qodef--one">
<div id="text-9" class="widget widget_text qodef-sticky-right"> <div class="textwidget"><p style="font-size: 15px; line-height: 1.6em; margin: 0px 16px 0px 0px;"><a class="qodef-custom-underline-link" href="tel:+444000999" target="_blank" rel="noopener">+444 000 999</a></p>
</div>
</div><div id="text-10" class="widget widget_text qodef-sticky-right"> <div class="textwidget"><p style="font-size: 15px; line-height: 1.6em;"><a class="qodef-custom-underline-link" href="/cdn-cgi/l/email-protection#781e171313161d0a3809171c1d561b1715" target="_blank" rel="noopener"><span class="__cf_email__" data-cfemail="3a5c555151545f487a4b555e5f14595557">[email&#160;protected]</span></a></p>
</div>
</div><div id="fokkner_core_search_opener-3" class="widget widget_fokkner_core_search_opener qodef-sticky-right"><a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--svg-path qodef-search-opener" style="margin: 0px 2px 2px 16px;">
<span class="qodef-m-icon qodef--open">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 12 12" style="enable-background:new 0 0 12 12;" xml:space="preserve">
<g>
<path d="M11.1,12c-0.2,0-0.5-0.1-0.6-0.3L8,9.3c-0.8,0.6-1.9,0.9-2.9,0.9C2.3,10.2,0,7.9,0,5.1S2.3,0,5.1,0
		s5.1,2.3,5.1,5.1c0,1-0.3,2-0.9,2.9l2.5,2.5c0.2,0.2,0.3,0.4,0.3,0.6C12,11.6,11.6,12,11.1,12z M5.1,1.8c-1.8,0-3.2,1.4-3.2,3.2
		s1.4,3.2,3.2,3.2s3.2-1.4,3.2-3.2S6.9,1.8,5.1,1.8z" />
</g>
</svg> </span>
</a>
</div><div id="fokkner_core_side_area_opener-3" class="widget widget_fokkner_core_side_area_opener qodef-sticky-right"><a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--svg-path qodef-side-area-opener" style="margin: 0px 0px 0px 15px">
<span class="qodef-m-icon qodef--open">
<svg class="qodef-svg-icon-open" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 21 21" width="21" height="21" xml:space="preserve">
<g>
<rect width="8" height="8" />
<rect x="13" width="8" height="8" />
<rect y="13" width="8" height="8" />
<rect x="13" y="13" width="8" height="8" />
</g>
</svg> </span>
</a>
</div> </div>
</div>
</div>
</div>
</header>
<header id="qodef-page-mobile-header">
<div id="qodef-page-mobile-header-inner" class="">
<a itemprop="url" class="qodef-mobile-header-logo-link" href="https://fokkner.qodeinteractive.com/" rel="home">
<img width="42" height="42" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/logo-mobile-img-1.png" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" /> </a>
<a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--predefined qodef-mobile-header-opener">
<span class="qodef-m-icon qodef--open">
<span class="qodef-m-lines"><span class="qodef-m-line qodef--1"><span class="qodef-m-square qodef--1"></span><span class="qodef-m-square qodef--2"></span></span><span class="qodef-m-line qodef--2"><span class="qodef-m-square qodef--1"></span><span class="qodef-m-square qodef--2"></span></span></span> </span>
<span class="qodef-m-icon qodef--close">
<span class="qodef-m-lines"><span class="qodef-m-line qodef--1"><span class="qodef-m-square qodef--1"></span><span class="qodef-m-square qodef--2"></span></span><span class="qodef-m-line qodef--2"><span class="qodef-m-square qodef--1"></span><span class="qodef-m-square qodef--2"></span></span></span> </span>
</a>
<nav class="qodef-mobile-header-navigation" role="navigation" aria-label="Mobile Menu">
<ul id="menu-main-menu-4" class="qodef-content-grid"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-34 qodef--hide-link qodef-menu-item--narrow"><a href="#" onclick="JavaScript: return false;"><span class="qodef-menu-item-text">Home</span></a><svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32"><g><path d="M 13.8,24.196c 0.39,0.39, 1.024,0.39, 1.414,0l 6.486-6.486c 0.196-0.196, 0.294-0.454, 0.292-0.71 c0-0.258-0.096-0.514-0.292-0.71L 15.214,9.804c-0.39-0.39-1.024-0.39-1.414,0c-0.39,0.39-0.39,1.024,0,1.414L 19.582,17 L 13.8,22.782C 13.41,23.172, 13.41,23.806, 13.8,24.196z"></path></g></svg>

</li>
</div></div>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-44 qodef--hide-link qodef-menu-item--narrow"><a href="#" onclick="JavaScript: return false;"><span class="qodef-menu-item-text">Shop</span></a><svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32"><g><path d="M 13.8,24.196c 0.39,0.39, 1.024,0.39, 1.414,0l 6.486-6.486c 0.196-0.196, 0.294-0.454, 0.292-0.71 c0-0.258-0.096-0.514-0.292-0.71L 15.214,9.804c-0.39-0.39-1.024-0.39-1.414,0c-0.39,0.39-0.39,1.024,0,1.414L 19.582,17 L 13.8,22.782C 13.41,23.172, 13.41,23.806, 13.8,24.196z"></path></g></svg>
</li>
</ul> </nav>
</div>
</header>
    </head>
  <body>
    <div id="main-content">
    @yield('content')
  </body>
</html>
