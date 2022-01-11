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
    <body class="antialiased">

              <div id="qodef-page-outer">
              <div id="qodef-page-inner" class="qodef-content-full-width">
              <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
              <div class="qodef-grid-inner clear">
              <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
              <div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12" data-elementor-settings="[]">
              <div class="elementor-section-wrap">
              <section class="elementor-section elementor-top-section elementor-element elementor-element-7bccc17 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="7bccc17" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f33f13c" data-id="f33f13c" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-cbe077f elementor-widget elementor-widget-fokkner_core_showcase_slider_video_info" data-id="cbe077f" data-element_type="widget" data-widget_type="fokkner_core_showcase_slider_video_info.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-showcase-slider-video-info qodef-full-height-slider--yes qodef-show-social-links--yes">
              <div class="qodef-main-swiper qodef-m-image-holder" data-options="{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:0,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;5000&quot;,&quot;speedAnimation&quot;:&quot;&quot;}">
              <div class="swiper-wrapper">
              <div class="swiper-slide">
              <img width="1920" height="968" src="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" class="attachment-full size-full" alt="jj"
              srcset="{{asset ('wp-content/uploads/2021/05/WHISPERS.png 1920'),
              ('wp-content/uploads/2021/05/WHISPERS.png 600w'),
              ('wp-content/uploads/2021/05/WHISPERS.png 300w'),
              ('wp-content/uploads/2021/05/WHISPERS.png 1024w'),
              ('wp-content/uploads/2021/05/WHISPERS.png 768w'),
              ('wp-content/uploads/2021/05/WHISPERS.png 1536w')}}"
               sizes="(max-width: 1920px) 100vw, 1920px" />
              <div class="qodef-m-content-holder">
              <span class="qodef-counter-holder">
              <span class="qodef-counter-current">01</span>
              <span class="qodef-counter-total">03</span>
              </span>
              <h1 class="qodef-m-title">Whispers Realtors</h1>
              <div class="qodef-m-button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--outlined   qodef-html--link" href="https://fokkner.qodeinteractive.com/contact-us/" target="_self"> <span class="qodef-m-text">Make an enquiry</span></a> </div>
              </div>
              </div>
              <!-- <div class="swiper-slide">
              <img width="1920" height="968" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-3.jpg" class="attachment-full size-full" alt="jj" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-3.jpg 1920w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-3-600x303.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-3-300x151.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-3-1024x516.jpg 1024w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-3-768x387.jpg 768w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-3-1536x774.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />
              <div class="qodef-m-content-holder">
              <span class="qodef-counter-holder">
              <span class="qodef-counter-current">02</span>
              <span class="qodef-counter-total">03</span>
              </span>
              <h1 class="qodef-m-title">Simple design</h1>
              <div class="qodef-m-button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--outlined   qodef-html--link" href="https://fokkner.qodeinteractive.com/contact-us/" target="_self"> <span class="qodef-m-text">Make an enquiry</span></a> </div>
              </div>
              </div> -->
              <!-- <div class="swiper-slide">
              <img width="1920" height="968" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-5.jpg" class="attachment-full size-full" alt="jj" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-5.jpg 1920w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-5-600x303.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-5-300x151.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-5-1024x516.jpg 1024w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-5-768x387.jpg 768w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-5-1536x774.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />
              <div class="qodef-m-content-holder">
              <span class="qodef-counter-holder">
              <span class="qodef-counter-current">03</span>
              <span class="qodef-counter-total">03</span>
              </span>
              <h1 class="qodef-m-title">Modern home</h1>
              <div class="qodef-m-button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--outlined   qodef-html--link" href="https://fokkner.qodeinteractive.com/contact-us/" target="_self"> <span class="qodef-m-text">Make an enquiry</span></a> </div>
              </div>
              </div> -->
              </div>
              </div>
              <div class="qodef-additional-swiper" data-options="{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:0,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;5000&quot;,&quot;speedAnimation&quot;:&quot;&quot;}">
              <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="qodef-m-info qodef-info-has--video qodef-title-break--disabled">
                <div class="qodef-m-info-holder">
                <div class="qodef-m-text-holder">
                <h4 class="qodef-m-info-title">Dream <br> Apartment</h4>
                <p class="qodef-m-info-text">We Help You Find The House Of Your Dreams. Beautiful designed 1 and 2 bedroom apartments in Utawala, Nairobi.</p>
                </div>
                <div class="qodef-shortcode">
                  <div class="qodef-m-image"> <img width="310" height="244"
                    src="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" class="attachment-full size-full" alt="jj"
                     srcset="{{asset ('wp-content/uploads/2021/05/WHISPERS.png 310w')
                     ,('wp-content/uploads/2021/05/WHISPERS.png  300w')}}" sizes="(max-width: 310px) 100vw, 310px" /> </div>
                     <a itemprop="url" class="qodef-m-play qodef-magnific-popup qodef-popup-item" href="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" data-type="iframe"> <span class="qodef-m-play-inner">
                    <svg xmlns="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" xmlns:xlink="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" x="0px" y="0px" width="11" height="12" viewBox="0 0 11 12" style="enable-background:new 0 0 11 12;" xml:space="preserve">
                       <polygon points="0,12 0,0 11,6 " /> </svg> </span> </a></div> </div>
                </div>
              </div>
              <div class="swiper-slide">
              <div class="qodef-m-info qodef-info-has--video qodef-title-break--disabled">
              <div class="qodef-m-info-holder">
              <div class="qodef-m-text-holder">
              <h4 class="qodef-m-info-title">Minimalistic<br> architecture</h4>
              <p class="qodef-m-info-text">If you’re interested in modern cluster homes, then check this avant-garde house. Traditional design with modern elements of minimalism.</p>
              </div>
              <div class="qodef-shortcode qodef-m  qodef-video-button qodef--has-img">
                <div class="qodef-m-image"> <img width="310" height="244"
                  src="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" class="attachment-full size-full" alt="jj"
                   srcset="{{asset ('wp-content/uploads/2021/05/WHISPERS.png 310w')
                   ,('wp-content/uploads/2021/05/WHISPERS.png  300w')}}" sizes="(max-width: 310px) 100vw, 310px" /> </div>
                   <a itemprop="url" class="qodef-m-play qodef-magnific-popup qodef-popup-item" href="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" data-type="iframe"> <span class="qodef-m-play-inner">
                  <svg xmlns="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" xmlns:xlink="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" x="0px" y="0px" width="11" height="12" viewBox="0 0 11 12" style="enable-background:new 0 0 11 12;" xml:space="preserve">
                     <polygon points="0,12 0,0 11,6 " /> </svg> </span> </a></div> </div>
              </div>
              </div>
              <div class="swiper-slide">
              <div class="qodef-m-info qodef-info-has--video qodef-title-break--disabled">
              <div class="qodef-m-info-holder">
              <div class="qodef-m-text-holder">
              <h4 class="qodef-m-info-title">Clean interior<br> design</h4>
              <p class="qodef-m-info-text">We created both a modern exterior and interior for your future home. This house includes a neat interior design for those interested in minimalism.</p>
              </div>
              <div class="qodef-shortcode qodef-m  qodef-video-button qodef--has-img"> <div class="qodef-m-image"> <img width="310" height="244" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-6.jpg" class="attachment-full size-full" alt="jj" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-6.jpg 310w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/h1-img-6-300x236.jpg 300w" sizes="(max-width: 310px) 100vw, 310px" /> </div> <a itemprop="url" class="qodef-m-play qodef-magnific-popup qodef-popup-item" href="{{asset ('wp-content/uploads/2021/05/WHISPERS.png')}}" data-type="iframe"> <span class="qodef-m-play-inner"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11" height="12" viewBox="0 0 11 12" style="enable-background:new 0 0 11 12;" xml:space="preserve"> <polygon points="0,12 0,0 11,6 " /> </svg> </span> </a></div> </div>
              </div>
              </div>
              </div>
              </div> <div class="qodef-m-socail-links">
              <span class="qodef-shortcode qodef-m  qodef-icon-holder  qodef-layout--normal"> <a itemprop="url" href="https://www.facebook.com/QodeInteractive" target="_blank"> <span class="qodef-icon-font-awesome fab fa-facebook-f qodef-icon qodef-e" style="font-size: 14px"></span> </a> </span><span class="qodef-shortcode qodef-m  qodef-icon-holder  qodef-layout--normal"> <a itemprop="url" href="https://www.instagram.com/qodeinteractive/" target="_blank"> <span class="qodef-icon-font-awesome fab fa-instagram qodef-icon qodef-e" style="font-size: 14px"></span> </a> </span><span class="qodef-shortcode qodef-m  qodef-icon-holder  qodef-layout--normal"> <a itemprop="url" href="https://twitter.com/QodeInteractive" target="_blank"> <span class="qodef-icon-font-awesome fab fa-twitter qodef-icon qodef-e" style="font-size: 14px"></span> </a> </span> </div>
              <div class="swiper-navigation-holder">
              <div class="swiper-button-prev">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 11" style="enable-background:new 0 0 32 11;" xml:space="preserve">
              <g><rect x="9.8" y="5" width="22.2" height="1" /><polygon points="11,0 11,11 0,5.5 	" /></g>
              </svg>
              </div>
              <div class="swiper-button-next">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 11" style="enable-background:new 0 0 32 11;" xml:space="preserve">
              <g><rect y="5" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 22.1644 11)" width="22.2" height="1" /><polygon points="21,11 21,0 32,5.5 	" /></g>
              </svg>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-5efcc89 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="5efcc89" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a99b3c4" data-id="a99b3c4" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-b8b5309 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-fokkner_core_property_info" data-id="b8b5309" data-element_type="widget" data-widget_type="fokkner_core_property_info.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-property-info-holder qodef-title-break--disabled qodef-pi--standard">
              <div class="qodef-e-property-info-item">
              <div class="qodef-e-pi-main-content">
              <div class="qodef-e-pi-content-inner">
              <h3 itemprop="name" class="qodef-e-title entry-title">
              <a itemprop="url" class="qodef-e-title-link" href="https://fokkner.qodeinteractive.com/property-item/private-residental/">
              4 floors<br /> Residential area</a>
              </h3>
              <p itemprop="description" class="qodef-e-excerpt">Located in Utawala area, of a well-known neighborhood surround by nature, and parks. None stop water supply and internet to ensure clients comfortability. Your new home awaits!
              </p>
              <div class="qodef-grid qodef-layout--columns qodef-col-num--2 qodef-gutter--normal">
              <div class="qodef-grid-inner clear">
              <div class="qodef-e qodef-e-property-info-item qodef-grid-item">
              <div class="qodef-e-pi-item-inner">
              <div> <img width="45" height="42" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/p1-img-6.png" class="attachment-full size-full" alt="aa" /></div>
              <div>
              <p class="qodef-e-feature-title">Property type:</p>
              <span class="qodef-e-feature-description">Apartment</span>
              </div>
              </div>
              </div>
              <div class="qodef-e qodef-e-property-info-item qodef-grid-item">
              <div class="qodef-e-pi-item-inner">
              <div> <img width="45" height="42" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/p1-img-7.png" class="attachment-full size-full" alt="aa" /></div>
              <div>
              <p class="qodef-e-feature-title">Parking:</p>
              <span class="qodef-e-feature-description">Available</span>
              </div>
              </div>
              </div>
              <div class="qodef-e qodef-e-property-info-item qodef-grid-item">
              <div class="qodef-e-pi-item-inner">
              <div> <img width="45" height="42" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/p1-img-8.png" class="attachment-full size-full" alt="aa" /></div>
              <div>
              <p class="qodef-e-feature-title">Accomodation:</p>
              <span class="qodef-e-feature-description">Furnished</span>
              </div>
              </div>
              </div>
              <div class="qodef-e qodef-e-property-info-item qodef-grid-item">
              <div class="qodef-e-pi-item-inner">
              <div> <img width="45" height="42" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/p1-img-9.png" class="attachment-full size-full" alt="a" /></div>
              <div>
              <p class="qodef-e-feature-title">Water supply</p>
              <span class="qodef-e-feature-description">Constant</span>
              </div>
              </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-read-more">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--outlined   qodef-html--link" href="https://fokkner.qodeinteractive.com/property-item/private-residental/" target="_self"> <span class="qodef-m-text">View more</span></a> </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-97c1e70" data-id="97c1e70" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-beef30f elementor-widget elementor-widget-slider_revolution" data-id="beef30f" data-element_type="widget" data-widget_type="slider_revolution.default">
              <div class="elementor-widget-container">
              <div class="wp-block-themepunch-revslider">
              <p class="rs-p-wp-fix"></p>
              <rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:100%;">
              <rs-module id="rev_slider_4_1" style="" data-version="6.5.3">
              <rs-slides>
              <rs-slide data-key="rs-4" data-title="Slide" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
              <img src="{{asset ('wp-content/plugins/revslider/public/assets/assets/dummy.png')}}" alt="Slide" title="Main Home" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{asset ('wp-content/plugins/revslider/public/assets/assets/transparent.png')}}" data-no-retina>
              <rs-layer id="slider-4-slide-4-layer-1" data-type="image" data-xy="x:c;xo:-18px,-15px,-16px,-8px;y:m;yo:210px,198px,197px,91px;" data-text="l:22;a:inherit;" data-dim="w:604px,510px,566px,265px;h:100px,84px,94px,44px;" data-actions='o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-1;ch:true;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-2;ch:true;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-24;ch:true;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-25;||o:mouseenter;a:startlayer;layer:backgroundvideo;ch:true;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-2;ch:true;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-24;ch:true;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-25;ch:true;||o:mouseleave;a:stoplayer;layer:backgroundvideo;ch:true;' data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-frame_1="sR:10;" data-frame_999="o:0;st:w;sR:8690;" style="z-index:16;"> <img src="{{asset ('wp-content/plugins/revslider/public/assets/assets/dummy.png')}}" alt="aa" class="tp-rs-img rs-lazyload" width="604" height="100" data-lazyload="{{asset ('wp-content/uploads/2021/06/content-rev-img-2.png"')}}" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-2" data-type="image" data-xy="x:c;xo:-18px,-15px,-16px,-9px;y:m;yo:210px,198px,197px,89px;" data-text="l:22;a:inherit;" data-dim="w:604px,510px,566px,255px;h:100px,84px,94px,42px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-frame_1="sR:10;st:a;" data-frame_999="o:0;st:a;sR:8690;" style="z-index:11;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="1208" height="200" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/05/content-rev-hover-img-1.png" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-15" data-type="image" data-xy="x:c;y:m;yo:0,20px,0,0;" data-text="l:22;a:inherit;" data-dim="w:704px,592px,660px,295px;h:548px,461px,514px,230px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_1="sp:0;sR:10;" data-frame_999="o:0;st:w;sR:8690;" style="z-index:12;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="1408" height="1096" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/05/content-rev-img-1.png" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-16" data-type="image" data-xy="x:c;xo:-113px,-94px,-103px,-47px;y:m;yo:24px,41px,23px,9px;" data-text="l:22;a:inherit;" data-dim="w:480px,409px,456px,200px;h:221px,188px,210px,92px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-frame_1="sR:10;st:a;" data-frame_999="o:0;st:a;sR:8690;" style="z-index:9;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="960" height="442" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/05/content-rev-hover-img-3.png" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-17" data-type="image" data-xy="x:c;xo:-113px,-94px,-103px,-49px;y:m;yo:24px,41px,23px,9px;" data-text="l:22;a:inherit;" data-dim="w:480px,409px,405px,200px;h:221px,188px,151px,48px;" data-actions='o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-17;ch:true;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-16;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-5;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-11;||o:mouseenter;a:startlayer;layer:backgroundvideo;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-16;ch:true;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-5;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-11;||o:mouseleave;a:stoplayer;layer:backgroundvideo;' data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-ford="frame_0;frame_1;frame_2;frame_999;" data-frame_1="sR:10;" data-frame_999="o:0;st:w;sR:8690;" data-frame_2="oX:50%;oY:50%;oZ:0;tp:600px;st:410;sp:400;" style="z-index:14;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="480" height="221" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/06/content-rev-img-4.png" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-22" data-type="image" data-xy="x:c;xo:-2px,-1px,-2px,-2px;y:m;yo:-85px,-51px,-79px,-37px;" data-text="l:22;a:inherit;" data-dim="w:644px,542px,598px,268px;h:380px,320px,353px,158px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-frame_1="sR:10;st:a;" data-frame_999="o:0;st:a;sR:8690;" style="z-index:8;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="AA" class="tp-rs-img rs-lazyload" width="1288" height="760" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/05/content-rev-hover-img-4.png" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-23" data-type="image" data-xy="x:c;xo:28px,22px,24px,10px;y:m;yo:108px,111px,103px,46px;" data-text="l:22;a:inherit;" data-dim="w:536px,450px,505px,230px;h:146px,123px,138px,63px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-frame_1="sR:10;st:a;" data-frame_999="o:0;st:a;sR:8690;" style="z-index:10;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="1072" height="292" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/05/content-rev-hover-img-2.png" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-28" data-type="image" data-xy="x:c;xo:28px,22px,24px,9px;y:m;yo:108px,111px,103px,51px;" data-text="l:22;a:inherit;" data-dim="w:536px,450px,505px,237px;h:146px,123px,138px,43px;" data-actions='o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-28;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-23;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-24;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-25;||o:mouseenter;a:startlayer;layer:backgroundvideo;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-23;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-24;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-25;||o:mouseleave;a:stoplayer;layer:backgroundvideo;' data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-frame_1="sR:10;" data-frame_999="o:0;st:w;sR:8690;" style="z-index:15;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="536" height="146" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/06/content-rev-img-3.png" data-no-retina>
              </rs-layer><rs-layer id="slider-4-slide-4-layer-29" data-type="image" data-xy="x:c;xo:-2px,-1px,-2px,-29px;y:m;yo:-85px,-51px,-79px,-77px;" data-text="l:22;a:inherit;" data-dim="w:644px,404px,484px,195px;h:380px,190px,185px,77px;" data-actions='o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-29;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-22;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-26;||o:mouseenter;a:startlayer;layer:slider-4-slide-4-layer-27;||o:mouseenter;a:startlayer;layer:backgroundvideo;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-22;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-26;||o:mouseleave;a:stoplayer;layer:slider-4-slide-4-layer-27;||o:mouseleave;a:stoplayer;layer:backgroundvideo;' data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-triggercache="keep" data-frame_1="sR:10;" data-frame_999="o:0;st:w;sR:8690;" style="z-index:13;"><img src="//fokkner.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="644" height="380" data-lazyload="//fokkner.qodeinteractive.com/wp-content/uploads/2021/06/content-rev-img-5.png" data-no-retina>
              </rs-layer> </rs-slide>
              </rs-slides>
              </rs-module>
              <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
              					setREVStartSize({c: 'rev_slider_4_1',rl:[1920,1700,1025,680],el:[548,540,515,239],gw:[704,592,660,307],gh:[548,540,515,239],type:'hero',justify:'',layout:'fullwidth',mh:"0"});
              				</script>
              </rs-module-wrap>

              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-bafa118 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle qodef-elementor-content-no" data-id="bafa118" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d3b231e" data-id="d3b231e" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-3eb9a8a elementor-widget elementor-widget-fokkner_core_video_button" data-id="3eb9a8a" data-element_type="widget" data-widget_type="fokkner_core_video_button.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-video-button ">
              <div class="qodef-m-image">
              </div>
              <a itemprop="url" class="qodef-m-play qodef-magnific-popup qodef-popup-item" style="font-size: 78px" href="https://vimeo.com/220752997" data-type="iframe">
              <span class="qodef-m-play-inner">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11" height="12" viewBox="0 0 11 12" style="enable-background:new 0 0 11 12;" xml:space="preserve">
              <polygon points="0,12 0,0 11,6 " />
              </svg>
              </span>
              </a>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-e5cc6f5 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="e5cc6f5" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b04035" data-id="3b04035" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-dbbcf05 elementor-widget elementor-widget-fokkner_core_apartment_indent_slider" data-id="dbbcf05" data-element_type="widget" data-widget_type="fokkner_core_apartment_indent_slider.default">
              <div class="elementor-widget-container">
              <div class="qodef-apartment-indent-slider qodef-behavior--fixed-indent-slider">
              <div class="qodef-left-info">
              <div class="qodef-left-info-content">
              <h3 class="qodef-e-title entry-title">Modern way of living in a cluster home</h3>
              <div class="qodef-e-features-list-holder">
              <div class="qodef-e-features-list">
              <span class="qodef-m-feature-title">Property size:</span>
              <span class="qodef-m-feature-text">130 m2</span>
              </div>
              <div class="qodef-e-features-list">
              <span class="qodef-m-feature-title">Heating:</span>
              <span class="qodef-m-feature-text">Floor heating</span>
              </div>
              <div class="qodef-e-features-list">
              <span class="qodef-m-feature-title">Structure:</span>
              <span class="qodef-m-feature-text">Two Bedrooms</span>
              </div>
              <div class="qodef-e-features-list">
              <span class="qodef-m-feature-title">Property type:</span>
              <span class="qodef-m-feature-text">Townhome</span>
              </div>
              <div class="qodef-e-features-list">
              <span class="qodef-m-feature-title">Accomodation:</span>
              <span class="qodef-m-feature-text">Furnished</span>
              </div>
              <div class="qodef-e-features-list">
              <span class="qodef-m-feature-title">Parking spaces:</span>
              <span class="qodef-m-feature-text">1 space</span>
              </div>
              <div class="qodef-e-features-list">
              <span class="qodef-m-feature-title">Rent between:</span>
              <span class="qodef-m-feature-text">€900-1500</span>
              </div>
              </div>
              </div>
              </div>
              <div class="qodef-shortcode qodef-m  qodef-apartment-indent-slider qodef-item-layout--info-hover qodef-grid qodef-layout--fixed-indent-slider qodef-swiper-container  qodef-gutter--normal qodef-col-num--1.389 qodef-item-layout--info-hover qodef-responsive--custom qodef-col-num--1440--1.338 qodef-col-num--1368--1.282 qodef-col-num--1366--1.279 qodef-col-num--1280--1.255 qodef-col-num--1024--1 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;slidesPerView&quot;:1.3890000000000000124344978758017532527446746826171875,&quot;spaceBetween&quot;:30,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:1.33800000000000007815970093361102044582366943359375,&quot;slidesPerView1368&quot;:1.282000000000000028421709430404007434844970703125,&quot;slidesPerView1366&quot;:1.278999999999999914734871708787977695465087890625,&quot;slidesPerView1280&quot;:1.25499999999999989341858963598497211933135986328125,&quot;slidesPerView1024&quot;:1,&quot;slidesPerView768&quot;:1,&quot;slidesPerView680&quot;:1,&quot;slidesPerView480&quot;:1}">
              <div class="swiper-wrapper">
              <article class="qodef-e qodef-grid-item swiper-slide post-799 apartment-item type-apartment-item status-publish has-post-thumbnail hentry">
              <div class="qodef-e-inner">
              <div class="qodef-e-image">
              <div class="qodef-e-media-image">
              <a itemprop="url" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-1/">
              <img width="800" height="445" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-1.jpg" class="attachment-full size-full wp-post-image" alt="aa" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-1.jpg 800w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-1-600x334.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-1-300x167.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-1-768x427.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
              </div>
              </div>
              <div class="qodef-e-content">
              <div class="qodef-e-content-inner">
              <h4 itemprop="name" class="qodef-e-title entry-title">
              <a itemprop="url" class="qodef-e-title-link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-1/">
              Apartment 1	</a>
              </h4>
              <p itemprop="description" class="qodef-e-excerpt">Duis aute irure dolor in reprehenderit in culpa officia deserunt mollit id est laborum.</p>
              <div class="qodef-e-read-more">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-1/" target="_self"> <span class="qodef-m-text">Read More</span></a> </div>
              </div>
              </div>
              </div>
              </article>
              <article class="qodef-e qodef-grid-item swiper-slide post-3072 apartment-item type-apartment-item status-publish has-post-thumbnail hentry">
              <div class="qodef-e-inner">
              <div class="qodef-e-image">
              <div class="qodef-e-media-image">
              <a itemprop="url" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-2/">
              <img width="800" height="445" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-2.jpg" class="attachment-full size-full wp-post-image" alt="aa" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-2.jpg 800w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-2-600x334.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-2-300x167.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-2-768x427.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
              </div>
              </div>
              <div class="qodef-e-content">
              <div class="qodef-e-content-inner">
              <h4 itemprop="name" class="qodef-e-title entry-title">
              <a itemprop="url" class="qodef-e-title-link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-2/">
              Apartment 2	</a>
              </h4>
              <p itemprop="description" class="qodef-e-excerpt">Duis aute irure dolor in reprehenderit in culpa officia deserunt mollit id est laborum.</p>
              <div class="qodef-e-read-more">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-2/" target="_self"> <span class="qodef-m-text">Read More</span></a> </div>
              </div>
              </div>
              </div>
              </article>
              <article class="qodef-e qodef-grid-item swiper-slide post-3071 apartment-item type-apartment-item status-publish has-post-thumbnail hentry">
              <div class="qodef-e-inner">
              <div class="qodef-e-image">
              <div class="qodef-e-media-image">
              <a itemprop="url" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-3/">
              <img width="800" height="445" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-4.jpg" class="attachment-full size-full wp-post-image" alt="aa" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-4.jpg 800w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-4-600x334.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-4-300x167.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-4-768x427.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
              </div>
              </div>
              <div class="qodef-e-content">
              <div class="qodef-e-content-inner">
              <h4 itemprop="name" class="qodef-e-title entry-title">
              <a itemprop="url" class="qodef-e-title-link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-3/">
              Apartment 3	</a>
              </h4>
              <p itemprop="description" class="qodef-e-excerpt">Duis aute irure dolor in reprehenderit in culpa officia deserunt mollit id est laborum.</p>
              <div class="qodef-e-read-more">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-3/" target="_self"> <span class="qodef-m-text">Read More</span></a> </div>
              </div>
              </div>
              </div>
              </article>
              <article class="qodef-e qodef-grid-item swiper-slide post-3073 apartment-item type-apartment-item status-publish has-post-thumbnail hentry">
              <div class="qodef-e-inner">
              <div class="qodef-e-image">
              <div class="qodef-e-media-image">
              <a itemprop="url" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-4/">
              <img width="800" height="445" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-3.jpg" class="attachment-full size-full wp-post-image" alt="aa" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-3.jpg 800w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-3-600x334.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-3-300x167.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/a-list-img-3-768x427.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
              </div>
              </div>
              <div class="qodef-e-content">
              <div class="qodef-e-content-inner">
              <h4 itemprop="name" class="qodef-e-title entry-title">
              <a itemprop="url" class="qodef-e-title-link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-4/">
              Apartment 4	</a>
              </h4>
              <p itemprop="description" class="qodef-e-excerpt">Duis aute irure dolor in reprehenderit in culpa officia deserunt mollit id est laborum.</p>
              <div class="qodef-e-read-more">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-4/" target="_self"> <span class="qodef-m-text">Read More</span></a> </div>
              </div>
              </div>
              </div>
              </article>
              </div>
              <div class="qodef-e-navigation-wrapper">
              <div class="swiper-button-prev "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 11" style="enable-background:new 0 0 32 11;" xml:space="preserve"><g><rect x="9.8" y="5" width="22.2" height="1" /><polygon points="11,0 11,11 0,5.5 	" /></g></svg></div>
              <div class="swiper-button-next "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 11" style="enable-background:new 0 0 32 11;" xml:space="preserve"><g><rect y="5" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 22.1644 11)" width="22.2" height="1" /><polygon points="21,11 21,0 32,5.5" /></g></svg></div>
              </div>
              <div class="swiper-pagination"></div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-e622707 qodef-elementor-content-grid elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e622707" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-221d95f" data-id="221d95f" data-element_type="column">
              <div class="elementor-widget-wrap">
              </div>
              </div>
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-524453b" data-id="524453b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-f51dac3 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-fokkner_core_section_title" data-id="f51dac3" data-element_type="widget" data-widget_type="fokkner_core_section_title.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
              <h3 class="qodef-m-title">
              Schedule a visit </h3>
              <p class="qodef-m-text" style="margin-top: -15px">Duis aute irure dolor in reprehenderit in vate velit cillum culpa qui officia deserunt mollit anim id est.</p>
              </div>
              </div>
              </div>
              <div class="elementor-element elementor-element-fbf742f elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-wp-widget-fokkner_core_contact_form_7" data-id="fbf742f" data-element_type="widget" data-widget_type="wp-widget-fokkner_core_contact_form_7.default">
              <div class="elementor-widget-container">
              <div class="qodef-contact-form-7">
              <div role="form" class="wpcf7" id="wpcf7-f176-p12-o1" lang="en-US" dir="ltr">
              <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
              <form action="/#wpcf7-f176-p12-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
              <div style="display: none;">
              <input type="hidden" name="_wpcf7" value="176" />
              <input type="hidden" name="_wpcf7_version" value="5.5.3" />
              <input type="hidden" name="_wpcf7_locale" value="en_US" />
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f176-p12-o1" />
              <input type="hidden" name="_wpcf7_container_post" value="12" />
              <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
              </div>
              <div class="qodef-contact-form">
              <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail*" /></span>
              <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone*" /></span>
              <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message*" /></span>
              <button type="submit" class="wpcf7-form-control wpcf7-submit qodef-button qodef-size--normal qodef-layout--outlined qodef-m"><span class="qodef-m-text">Send message</span></button>
              </div><div class="wpcf7-response-output" aria-hidden="true"></div></form></div> </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-8738078 qodef-elementor-content-grid elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8738078" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-479d78d" data-id="479d78d" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-47aee37 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="47aee37" data-element_type="widget" data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
              <h3>Meet our amazing team</h3> </div>
              </div>
              <div class="elementor-element elementor-element-7414676 elementor-widget elementor-widget-fokkner_core_team_list" data-id="7414676" data-element_type="widget" data-widget_type="fokkner_core_team_list.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-team-list qodef-item-layout--info-below qodef-grid qodef-layout--columns qodef-layout--columns  qodef-gutter--extra-large qodef-col-num--3 qodef-item-layout--info-below qodef--no-bottom-space qodef-pagination--off qodef-responsive--custom qodef-col-num--1440--3 qodef-col-num--1368--3 qodef-col-num--1366--3 qodef-col-num--1280--3 qodef-col-num--1024--3 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;plugin&quot;:&quot;fokkner_core&quot;,&quot;module&quot;:&quot;post-types\/team\/shortcodes&quot;,&quot;shortcode&quot;:&quot;team-list&quot;,&quot;post_type&quot;:&quot;team&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:2,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;3&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;3&quot;,&quot;columns_1368&quot;:&quot;3&quot;,&quot;columns_1366&quot;:&quot;3&quot;,&quot;columns_1280&quot;:&quot;3&quot;,&quot;columns_1024&quot;:&quot;3&quot;,&quot;columns_768&quot;:&quot;1&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;extra-large&quot;,&quot;posts_per_page&quot;:&quot;3&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;layout&quot;:&quot;info-below&quot;,&quot;title_tag&quot;:&quot;h5&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;object_class_name&quot;:&quot;FokknerCore_Team_List_Shortcode&quot;,&quot;taxonomy_filter&quot;:&quot;team-category&quot;,&quot;item_classes&quot;:&quot;qodef-e qodef-grid-item qodef-grid-item&quot;,&quot;space_value&quot;:32}">
              <div class="qodef-grid-inner clear">
              <div class="qodef-e qodef-grid-item post-341 team type-team status-publish has-post-thumbnail hentry">
              <div class="qodef-e-inner">
              <div class="qodef-e-image">
              <div class="qodef-e-media-image">
              <img width="800" height="800" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1.jpg" class="attachment-full size-full wp-post-image" alt="jj" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1.jpg 800w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1-306x306.jpg 306w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1-100x100.jpg 100w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1-600x600.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1-300x300.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1-150x150.jpg 150w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1-768x768.jpg 768w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-1-650x650.jpg 650w" sizes="(max-width: 800px) 100vw, 800px" /> </div>
              </div>
              <div class="qodef-e-content">
              <h5 itemprop="name" class="qodef-e-title entry-title">
              Johan Johnson	</h5>
              <p class="qodef-e-role">Architect</p>
              <div class="qodef-team-member-social-icons">
              <a class="qodef-team-member-social-icon" href="https://www.facebook.com/QodeInteractive" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-facebook-f"></span> </a>
              <a class="qodef-team-member-social-icon" href="https://www.instagram.com/qodeinteractive/" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-instagram"></span> </a>
              <a class="qodef-team-member-social-icon" href="https://twitter.com/QodeInteractive" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-twitter"></span> </a>
              </div>
              </div>
              </div>
              </div>
              <div class="qodef-e qodef-grid-item post-363 team type-team status-publish has-post-thumbnail hentry">
              <div class="qodef-e-inner">
              <div class="qodef-e-image">
              <div class="qodef-e-media-image">
              <img width="800" height="800" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2.jpg" class="attachment-full size-full wp-post-image" alt="jj" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2.jpg 800w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2-306x306.jpg 306w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2-100x100.jpg 100w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2-600x600.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2-300x300.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2-150x150.jpg 150w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2-768x768.jpg 768w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-2-650x650.jpg 650w" sizes="(max-width: 800px) 100vw, 800px" /> </div>
              </div>
              <div class="qodef-e-content">
              <h5 itemprop="name" class="qodef-e-title entry-title">
              Maria Peterson	</h5>
              <p class="qodef-e-role">Partner</p>
              <div class="qodef-team-member-social-icons">
              <a class="qodef-team-member-social-icon" href="https://www.facebook.com/QodeInteractive" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-facebook-f"></span> </a>
              <a class="qodef-team-member-social-icon" href="https://www.instagram.com/qodeinteractive/" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-instagram"></span> </a>
              <a class="qodef-team-member-social-icon" href="https://twitter.com/QodeInteractive" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-twitter"></span> </a>
              </div>
              </div>
              </div>
              </div>
              <div class="qodef-e qodef-grid-item post-368 team type-team status-publish has-post-thumbnail hentry">
              <div class="qodef-e-inner">
              <div class="qodef-e-image">
              <div class="qodef-e-media-image">
              <img width="800" height="800" src="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3.jpg" class="attachment-full size-full wp-post-image" alt="jj" srcset="https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3.jpg 800w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3-306x306.jpg 306w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3-100x100.jpg 100w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3-600x600.jpg 600w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3-300x300.jpg 300w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3-150x150.jpg 150w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3-768x768.jpg 768w, https://fokkner.qodeinteractive.com/wp-content/uploads/2021/05/team-img-3-650x650.jpg 650w" sizes="(max-width: 800px) 100vw, 800px" /> </div>
              </div>
              <div class="qodef-e-content">
              <h5 itemprop="name" class="qodef-e-title entry-title">
              Steve Curtis	</h5>
              <p class="qodef-e-role">Architect</p>
              <div class="qodef-team-member-social-icons">
              <a class="qodef-team-member-social-icon" href="https://www.facebook.com/QodeInteractive" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-facebook-f"></span> </a>
              <a class="qodef-team-member-social-icon" href="https://www.instagram.com/qodeinteractive/" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-instagram"></span> </a>
              <a class="qodef-team-member-social-icon" href="https://twitter.com/QodeInteractive" target="_blank">
              <span class="qodef-icon-font-awesome fab fa-twitter"></span> </a>
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
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-36134eb elementor-section-boxed elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="36134eb" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8f3dadd" data-id="8f3dadd" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-6a6ed2c elementor-widget elementor-widget-fokkner_core_separator" data-id="6a6ed2c" data-element_type="widget" data-widget_type="fokkner_core_separator.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-separator clear qodef-position--center">
              <div class="qodef-m-line" style="border-style: solid;border-bottom-width: 0px;margin-top: 33%;margin-bottom: 33%"></div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-f4c5e7d qodef-elementor-content-grid elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f4c5e7d" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d53ffb0" data-id="d53ffb0" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-2acb26c elementor-widget elementor-widget-text-editor" data-id="2acb26c" data-element_type="widget" data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
              <h3>Check availability</h3> </div>
              </div>
              <div class="elementor-element elementor-element-a9a76f9 elementor-widget elementor-widget-fokkner_core_property_info_table" data-id="a9a76f9" data-element_type="widget" data-widget_type="fokkner_core_property_info_table.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-property-info-table">
              <div class="qodef-e-inner">
              <div class="qodef-e-pit-header">
              <div class="qodef-e-pit-header-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <h5 class="qodef-e-pit-header-title">Residence</h5>
              </div>
              </div>
              <div class="qodef-e-pit-header-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <h5 class="qodef-e-pit-header-title">Bed/Bath</h5>
              </div>
              </div>
              <div class="qodef-e-pit-header-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <h5 class="qodef-e-pit-header-title">Sq. Ft.</h5>
              </div>
              </div>
              <div class="qodef-e-pit-header-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <h5 class="qodef-e-pit-header-title">Sale price</h5>
              </div>
              </div>
              <div class="qodef-e-pit-header-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <h5 class="qodef-e-pit-header-title">Rent price</h5>
              </div>
              </div>
              <div class="qodef-e-pit-header-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <h5 class="qodef-e-pit-header-title">Floor plan</h5>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-content">
              <div class="qodef-e-pit-content-inner">
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
               Mudoks gallery </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/1 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              625 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €120.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €1.200 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-1/" target="_self"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Hamilton residence </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              2/2 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              1040 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €250.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €2.500 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-2/" target="_self"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              The Village Green </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/3 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              / </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €140.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €1.400 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-3/" target="_self"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Dutch metropolis </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/1 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              845 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €360.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €3.600 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-4/" target="_self"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Luxury townhouse </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/1 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              324 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €95.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €9.500 </div>
               </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-5/" target="_self"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Saga gallery </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              2/2 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              555 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              / </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €1.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item qodef-e-pit-item">
              <div class="qodef-e-pit-item-inner">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-6/" target="_self"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-inner-responsive">
              <div class="qodef-e-content-responsive">
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Residence</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Mudoks gallery </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Bed/Bath</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/1 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sq. Ft.</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              625 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sale price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €120.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Rent price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €1.200 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Floor plan</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-1/" target="_blank"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Residence</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Hamilton residence </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Bed/Bath</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              2/2 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sq. Ft.</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              1040 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sale price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €250.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Rent price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €2.500 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Floor plan</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-2/" target="_blank"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Residence</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              The Village Green </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Bed/Bath</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/3 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sq. Ft.</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              / </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sale price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €140.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Rent price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €1.400 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Floor plan</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-3/" target="_blank"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Residence</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Dutch metropolis </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Bed/Bath</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/1 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sq. Ft.</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              845 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sale price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €360.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Rent price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €3.600 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Floor plan</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-4/" target="_blank"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Residence</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Luxury townhouse </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Bed/Bath</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              1/1 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sq. Ft.</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              324 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sale price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €95.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Rent price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €9.500 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Floor plan</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-5/" target="_blank"> <span class="qodef-m-text">Learn more</span></a> </div>
              </div>
              </div>
              </div>
              <div class="qodef-e-pit-row">
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Residence</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              Saga gallery </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Bed/Bath</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              2/2 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sq. Ft.</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--number">
              555 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Sale price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              / </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Rent price</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--text">
              €1.000 </div>
              </div>
              </div>
              <div class="qodef-e-pit-content-item-resposnive qodef-e-pit-item-responsive">
              <div class="qodef-e-pit-responsive-header">
              <h5 class="qodef-e-pit-header-title">Floor plan</h5>
              </div>
              <div class="qodef-e-pit-responsive-content">
              <div class="qodef-e-pit-item-content qodef-pit-type--button">
              <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual   qodef-html--link" href="https://fokkner.qodeinteractive.com/apartment-item/apartment-6/" target="_blank"> <span class="qodef-m-text">Learn more</span></a> </div>
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
              </div>
              </section>
              <section class="elementor-section elementor-top-section elementor-element elementor-element-fe21ed9 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="fe21ed9" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-21e6cd7" data-id="21e6cd7" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-f73f985 elementor-widget elementor-widget-fokkner_core_instagram_list" data-id="f73f985" data-element_type="widget" data-widget_type="fokkner_core_instagram_list.default">
              <div class="elementor-widget-container">
              <div class="qodef-shortcode qodef-m  qodef-instagram-list qodef-layout--columns qodef--no-bottom-space  qodef-gutter--no qodef-col-num--5">
              <div id="sb_instagram" class="sbi sbi_col_5  sbi_width_resp" style="width: 100%;" data-feedid="sbi_17841447618093724#5" data-res="auto" data-cols="5" data-num="5" data-shortcode-atts="{&quot;0&quot;:&quot;5&quot;,&quot;1&quot;:&quot;5&quot;,&quot;2&quot;:&quot;0&quot;,&quot;3&quot;:&quot;px&quot;,&quot;4&quot;:&quot;auto&quot;,&quot;num&quot;:&quot;5&quot;,&quot;cols&quot;:&quot;5&quot;,&quot;imagepadding&quot;:&quot;0&quot;,&quot;imagepaddingunit&quot;:&quot;px&quot;,&quot;showheader&quot;:&quot;&quot;,&quot;showfollow&quot;:&quot;&quot;,&quot;showbutton&quot;:&quot;&quot;,&quot;imageres&quot;:&quot;auto&quot;}" data-postid="12" data-locatornonce="77f3871f7c" data-sbi-flags="favorLocal">
              <div id="sbi_images">
              <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_17999301631335052" data-date="1621595604">
              <div class="sbi_photo_wrap">
              <a class="sbi_photo" href="https://www.instagram.com/p/CPIgZaiD8zM/" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-atl3-2.cdninstagram.com/v/t51.29350-15/189858711_181083213906422_1217437841067375650_n.jpg?_nc_cat=103&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=tcKcyVq7blQAX-HDLuA&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT8HaV4loxyfudrS9wV65ZoL6eH7M8z30JW4APSn9jAsuQ&#038;oe=61E1A824" data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189858711_181083213906422_1217437841067375650_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tcKcyVq7blQAX-HDLuA&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT8HaV4loxyfudrS9wV65ZoL6eH7M8z30JW4APSn9jAsuQ&amp;oe=61E1A824&quot;,&quot;150&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189858711_181083213906422_1217437841067375650_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tcKcyVq7blQAX-HDLuA&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT8HaV4loxyfudrS9wV65ZoL6eH7M8z30JW4APSn9jAsuQ&amp;oe=61E1A824&quot;,&quot;320&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189858711_181083213906422_1217437841067375650_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tcKcyVq7blQAX-HDLuA&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT8HaV4loxyfudrS9wV65ZoL6eH7M8z30JW4APSn9jAsuQ&amp;oe=61E1A824&quot;,&quot;640&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189858711_181083213906422_1217437841067375650_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tcKcyVq7blQAX-HDLuA&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT8HaV4loxyfudrS9wV65ZoL6eH7M8z30JW4APSn9jAsuQ&amp;oe=61E1A824&quot;}">
              <span class="sbi-screenreader">Instagram post 17999301631335052</span>
              <img src="https://fokkner.qodeinteractive.com/wp-content/plugins/instagram-feed/img/placeholder.png" alt="Instagram post 17999301631335052">
              </a>
              </div>
              </div>
              <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_17896745728966861" data-date="1621595595">
              <div class="sbi_photo_wrap">
              <a class="sbi_photo" href="https://www.instagram.com/p/CPIgYWbDMLW/" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-atl3-2.cdninstagram.com/v/t51.29350-15/190235694_124700859726753_5713908568743480855_n.jpg?_nc_cat=104&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=rQ-Lbd7mMbEAX-OyHNB&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT9Qn96qGiopAY2r_8JDPT0avKYuAGs6MiVdWja4TzaTCQ&#038;oe=61E093FE" data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/190235694_124700859726753_5713908568743480855_n.jpg?_nc_cat=104&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=rQ-Lbd7mMbEAX-OyHNB&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9Qn96qGiopAY2r_8JDPT0avKYuAGs6MiVdWja4TzaTCQ&amp;oe=61E093FE&quot;,&quot;150&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/190235694_124700859726753_5713908568743480855_n.jpg?_nc_cat=104&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=rQ-Lbd7mMbEAX-OyHNB&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9Qn96qGiopAY2r_8JDPT0avKYuAGs6MiVdWja4TzaTCQ&amp;oe=61E093FE&quot;,&quot;320&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/190235694_124700859726753_5713908568743480855_n.jpg?_nc_cat=104&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=rQ-Lbd7mMbEAX-OyHNB&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9Qn96qGiopAY2r_8JDPT0avKYuAGs6MiVdWja4TzaTCQ&amp;oe=61E093FE&quot;,&quot;640&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/190235694_124700859726753_5713908568743480855_n.jpg?_nc_cat=104&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=rQ-Lbd7mMbEAX-OyHNB&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9Qn96qGiopAY2r_8JDPT0avKYuAGs6MiVdWja4TzaTCQ&amp;oe=61E093FE&quot;}">
              <span class="sbi-screenreader">Instagram post 17896745728966861</span>
              <img src="https://fokkner.qodeinteractive.com/wp-content/plugins/instagram-feed/img/placeholder.png" alt="Instagram post 17896745728966861">
              </a>
              </div>
              </div>
              <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_18010497499314785" data-date="1621595591">
              <div class="sbi_photo_wrap">
              <a class="sbi_photo" href="https://www.instagram.com/p/CPIgX1Zj9Xk/" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-atl3-2.cdninstagram.com/v/t51.29350-15/189196741_1791932754300820_8363348591439988549_n.jpg?_nc_cat=102&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=lTORSapDORAAX-89lg7&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_2Ll-MdgJJhP5crAh4jt91TYggsQHyabS4AHqivvU4dQ&#038;oe=61DFE257" data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189196741_1791932754300820_8363348591439988549_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=lTORSapDORAAX-89lg7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_2Ll-MdgJJhP5crAh4jt91TYggsQHyabS4AHqivvU4dQ&amp;oe=61DFE257&quot;,&quot;150&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189196741_1791932754300820_8363348591439988549_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=lTORSapDORAAX-89lg7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_2Ll-MdgJJhP5crAh4jt91TYggsQHyabS4AHqivvU4dQ&amp;oe=61DFE257&quot;,&quot;320&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189196741_1791932754300820_8363348591439988549_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=lTORSapDORAAX-89lg7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_2Ll-MdgJJhP5crAh4jt91TYggsQHyabS4AHqivvU4dQ&amp;oe=61DFE257&quot;,&quot;640&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/189196741_1791932754300820_8363348591439988549_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=lTORSapDORAAX-89lg7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_2Ll-MdgJJhP5crAh4jt91TYggsQHyabS4AHqivvU4dQ&amp;oe=61DFE257&quot;}">
              <span class="sbi-screenreader">Instagram post 18010497499314785</span>
              <img src="https://fokkner.qodeinteractive.com/wp-content/plugins/instagram-feed/img/placeholder.png" alt="Instagram post 18010497499314785">
              </a>
              </div>
              </div>
              <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_17887140818213027" data-date="1621595567">
              <div class="sbi_photo_wrap">
              <a class="sbi_photo" href="https://www.instagram.com/p/CPIgU9bDPU6/" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-atl3-2.cdninstagram.com/v/t51.29350-15/188539204_1207875242990929_5770535385518696068_n.jpg?_nc_cat=102&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Hj1X_3B3ujkAX_T7AY9&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_tXtWZpN4UZllghg2HHLQ7VAGEyYlnxC8NFhvJ3waYpw&#038;oe=61E0A55E" data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188539204_1207875242990929_5770535385518696068_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Hj1X_3B3ujkAX_T7AY9&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_tXtWZpN4UZllghg2HHLQ7VAGEyYlnxC8NFhvJ3waYpw&amp;oe=61E0A55E&quot;,&quot;150&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188539204_1207875242990929_5770535385518696068_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Hj1X_3B3ujkAX_T7AY9&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_tXtWZpN4UZllghg2HHLQ7VAGEyYlnxC8NFhvJ3waYpw&amp;oe=61E0A55E&quot;,&quot;320&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188539204_1207875242990929_5770535385518696068_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Hj1X_3B3ujkAX_T7AY9&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_tXtWZpN4UZllghg2HHLQ7VAGEyYlnxC8NFhvJ3waYpw&amp;oe=61E0A55E&quot;,&quot;640&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188539204_1207875242990929_5770535385518696068_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Hj1X_3B3ujkAX_T7AY9&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_tXtWZpN4UZllghg2HHLQ7VAGEyYlnxC8NFhvJ3waYpw&amp;oe=61E0A55E&quot;}">
              <span class="sbi-screenreader">Instagram post 17887140818213027</span>
              <img src="https://fokkner.qodeinteractive.com/wp-content/plugins/instagram-feed/img/placeholder.png" alt="Instagram post 17887140818213027">
              </a>
              </div>
              </div>
              <div class="sbi_item sbi_type_image sbi_new sbi_transition" id="sbi_18176396890119866" data-date="1621595559">
              <div class="sbi_photo_wrap">
              <a class="sbi_photo" href="https://www.instagram.com/p/CPIgT7MD-9J/" target="_blank" rel="noopener nofollow" data-full-res="https://scontent-atl3-2.cdninstagram.com/v/t51.29350-15/188055952_171924721511921_5721491843995209495_n.jpg?_nc_cat=106&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=yDCdIJ61OF4AX-Bx25b&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_QpvtuSHNQUYjVp6tpFVYLgGeYCIqSNRPzyuswTQyb0A&#038;oe=61E003D3" data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188055952_171924721511921_5721491843995209495_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=yDCdIJ61OF4AX-Bx25b&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_QpvtuSHNQUYjVp6tpFVYLgGeYCIqSNRPzyuswTQyb0A&amp;oe=61E003D3&quot;,&quot;150&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188055952_171924721511921_5721491843995209495_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=yDCdIJ61OF4AX-Bx25b&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_QpvtuSHNQUYjVp6tpFVYLgGeYCIqSNRPzyuswTQyb0A&amp;oe=61E003D3&quot;,&quot;320&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188055952_171924721511921_5721491843995209495_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=yDCdIJ61OF4AX-Bx25b&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_QpvtuSHNQUYjVp6tpFVYLgGeYCIqSNRPzyuswTQyb0A&amp;oe=61E003D3&quot;,&quot;640&quot;:&quot;https:\/\/scontent-atl3-2.cdninstagram.com\/v\/t51.29350-15\/188055952_171924721511921_5721491843995209495_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=yDCdIJ61OF4AX-Bx25b&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_QpvtuSHNQUYjVp6tpFVYLgGeYCIqSNRPzyuswTQyb0A&amp;oe=61E003D3&quot;}">
              <span class="sbi-screenreader">Instagram post 18176396890119866</span>
              <img src="https://fokkner.qodeinteractive.com/wp-content/plugins/instagram-feed/img/placeholder.png" alt="Instagram post 18176396890119866">
              </a>
              </div>
              </div>
              </div>
              <div id="sbi_load">
              </div>
              <span class="sbi_resized_image_data" data-feed-id="sbi_17841447618093724#5" data-resized="{&quot;17999301631335052&quot;:{&quot;id&quot;:&quot;189858711_181083213906422_1217437841067375650_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17896745728966861&quot;:{&quot;id&quot;:&quot;190235694_124700859726753_5713908568743480855_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;18010497499314785&quot;:{&quot;id&quot;:&quot;189196741_1791932754300820_8363348591439988549_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17887140818213027&quot;:{&quot;id&quot;:&quot;188539204_1207875242990929_5770535385518696068_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;18176396890119866&quot;:{&quot;id&quot;:&quot;188055952_171924721511921_5721491843995209495_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}}}">
              </span>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
              </div>
              </div>
              </div>
              </div>
              </main>
              </div>
              </div>

      </body>

</html>
