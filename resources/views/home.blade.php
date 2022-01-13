@extends('layouts.new')
@section('content')
<body class="body">
  <!-- NAV LINKS -->
    <div data-animation="default" class="navbar-section w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="8e7d6612-01c7-9bb0-1b73-9c98c9ce27b9" role="banner" data-duration="400" id="Navbar">

        <div class="navbar">
            <div class="navbar-container">
                <div class="navbar-left"><a href="/" aria-current="page" class="brand w-nav-brand w--current">
                  <img src="{{asset ('wp-content/uploads/2021/05/12.png')}}" width="100" alt=""/></a></div>
                <nav role="navigation"
                    class="nav-menu w-nav-menu">
                    <a href="#" class="nav-link w-nav-link">About</a>
                    <a href="#" class="nav-link w-nav-link">Pricing</a>

                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link w-nav-link">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-link w-nav-link">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </nav>
        </div>
    </div>
    </div>

    <!-- REV -->
    <div class="home-hero">
        <div style="opacity:0" class="home-hero-container"><img src="{{asset ('assets.website-files.com/5f308a2a4e2694784fd8c994/612585381160593d5f732577_home_hero_sun.svg')}}" loading="lazy" alt="" class="home-hero-sunset" />
            <div class="home-hero-content">
                <div class="home-hero-copy">
                    <div class="news-wire-list">
                        <a data-w-id="966dd18d-1b4c-a635-cc35-99b3cf320e85" href="/arex-engagement-survey" class="news-wire-link w-inline-block">
                            <div class="text-block-84"> Digitizing Property Management™</div>
                        </a>
                    </div>
                    <div class="w-embed">
                        <style>
                            /* This script is called in the Page Settings and runs before the body */

                            /* The | -delimited words will be converted to Array and finally to child <span> elements */

                            /* Such span elements need to be absolutely positioned inside the parent span */

                            /* jQuery will than init a recursive loop, calculate the next word width, and animating it (fade + width) */

                            .home-hero-heading {
                                flex: 0 auto;
                                margin-top: 8px;
                                margin-bottom: 24px;
                                border-radius: 0px;
                                color: #22303e;
                                font-size: 76px;
                                line-height: 0.88;
                                font-weight: 700;
                                letter-spacing: -0.03em;
                            }

                            [data-words] {
                                vertical-align: top;
                                position: static;
                                color: #3FC1F9;
                            }

                            [data-words]>span {
                                display: none;
                                position: absolute;
                                color: #0bf;
                            }

                            @media (max-width: 400px) {
                                .home-hero-heading {
                                    font-size: 48px;
                                }
                            }
                        </style>

                        <h1 class="home-hero-heading"><span data-words="Build|Upgrade|Manage|Digitize">Manage</span> your apartment complex</h1>
                    </div>
                    <div class="home-word-rotation-script w-embed w-script">
                        <script>
                            var Webflow = Webflow || [];
                            Webflow.push(function() {
                                $("[data-words]").attr("data-words", function(i, words) {
                                    var $self = $(this).text(""),
                                        words = words.split("|"),
                                        tot = words.length,
                                        c = 0;

                                    for (var i = 0; i < tot; i++) $self.append($('<span/>', {
                                        text: words[i]
                                    }));

                                    var $words = $self.find("span");


                                    (function loop() {
                                        $self.animate({
                                            width: $words.eq(c).width()
                                        });
                                        $words.stop().fadeOut().eq(c).fadeIn().delay(2000).show(0, loop);
                                        c = ++c % tot;
                                    }());
                                });
                            });
                        </script>
                    </div>
                    <p>We offer best-in-class resident experience while building community and saving money. <br/></p>
                    <div class="property-address-auto-complete-script w-embed w-script">
                        <!-- Property Lookup Form -->
                        <!-- Google Places API is loaded in the "before <head> section in the page settings -->
                        <script>
                            /* Set autocomplete input */
                            var Webflow = Webflow || [];
                            Webflow.push(function() {
                                let gpaInput = document.getElementById("property-lookup-field");
                                autocomplete = new google.maps.places.Autocomplete(gpaInput);

                                /* Property availability form submission */
                                $('#wf-form-Home-Property-Lookup-Form').submit(function() {
                                    sessionStorage.setItem('sugar_marketing_property', $('#property-lookup-field').val());
                                });
                            });
                        </script>
                    </div>
                    <!-- <div class="home-hero-location-lookup-form w-form">
                        <form id="wf-form-Home-Property-Lookup-Form" name="wf-form-Home-Property-Lookup-Form" data-name="Home Property Lookup Form" redirect="/contact-new-location" data-redirect="/contact-new-location" method="get" class="home-hero-lookup-form-container"><input type="text" class="home-hero-property-lookup-field w-input" maxlength="256" name="field" data-name="Field" placeholder="Your property address" id="property-lookup-field" required="" /><input type="submit" value="Check Availability"
                                data-wait="Please wait..." class="button button-large w-button" /></form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="actions w-container"><a href="/demo-book" class="button button-outline button-transparent w-button">Book 15 min demo</a></div> -->
                </div>
                <!-- <div class="home-hero-image-wrapper">
                  <img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image.png" loading="eager" sizes="(max-width: 991px) 100vw, 874.5px"
                  srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-500.png 500w,
                  https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-800.png 800w,
                   https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-1080.png 1080w,
                    https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-1600.png 1600w,
                    https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image.png 2605w"
                        alt="" class="home-hero-image" />
                    <div class="w-embed">
                        <style>
                            .home-hero-app-video-container {
                                width: 180px;
                                position: absolute;
                                bottom: 5px;
                                left: 137px;
                                border-radius: 24px;
                                border: 1px solid #f1f3f4;
                                overflow: hidden;
                            }

                            .home-hero-app-video {
                                width: 100%;
                            }
                        </style>

                        <div class="home-hero-app-video-container">
                            <video autoplay muted playsinline loop class="home-hero-app-video">
		<source src="https://drive.google.com/uc?export=view&id=1ug4ifMrqbGC_4O13Bz_H5JTJxxn0P4dB" type="video/mp4">
	</video>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

<!-- SEC 1 -->
    <div style="opacity:0" class="home-feature-section">
          <div class="home-feature-container">
              <div class="home-feature-content-container">
                  <div class="home-feature-section-copu">
                      <h4><strong class="bold-text-2">Manager portal</strong></h4>
                      <h1><strong class="bold-text">Explore new ways to engage with residents</strong></h1>
                      <p>We enable you to easily onboard new residents and communicate in real time. You can manage keys, schedule events, send announcements and more.</p>

                      <div class="home-feature-section-feature-outline">
                          <div class="home-feature-outline-block">
                            <img src="{{asset ('assets.website-files.com/5f308a2a4e2694784fd8c994/61257f30243035d787afe2bc_home_feature_icon_messages.svg')}}" loading="lazy" width="24" height="24" alt="" />
                              <h6>Real-time messaging</h6>
                              <p class="paragraph-9">Send <a href="#">messages</a> to residents instantly within this management system.</p>
                          </div>
                          <div class="home-feature-outline-block"><img src="{{asset ('assets.website-files.com/5f308a2a4e2694784fd8c994/61257f302c2ea6e176fa0891_home_feature_icon_community.svg')}}" loading="lazy" width="24" height="24" alt="" />
                              <h6>Community posts</h6>
                              <p class="paragraph-9">Make announcements to the entire building with <a href="#">posts</a> that show up in the resident <a href="#">mobile application.</a></p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>

<!-- SEC 2 -->
<div class="home-feature-section with-wave">
        <div class="home-feature-container gray-bg">
            <div class="home-feature-content-container">
              <div class="home-hero-image-wrapper">
                <!-- <img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array.png" loading="lazy" sizes="(max-width: 991px) 100vw, 876.34375px" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array-p-500.png 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array-p-800.png 800w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array-p-1080.png 1080w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array.png 1504w"
                      alt="" class="home-feature-mobile-image" /> -->
                    </div>
                <div class="home-feature-section-copu">
                    <h4><strong class="bold-text-2">Resident mobile application</strong></h4>
                    <h1><strong class="bold-text">A mobile app residents are excited to use</strong></h1>
                    <p>Sugar’s resident mobile application is an all-in-one solution to make apartment living better than ever. Residents can pay rent, unlock doors, share keys, interact with neighbors and more.</p>
                    <div class="actions w-container"><a href="/demo" class="button button-outline w-button">Explore the resident app</a></div>
                    <div class="home-feature-section-feature-outline">
                        <div class="home-feature-outline-block"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6125840a117b59a90b77e587_home_feature_icon_marketplace.svg" loading="lazy" width="24" height="24" alt="" />
                            <h6>Marketplace</h6>
                            <p class="paragraph-9">Residents can buy, sell, and lend items to one another through Sugar’s <a href="#">marketplace</a>.</p>
                        </div>
                        <div class="home-feature-outline-block"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6125840a403b2c625c65188c_home_feature_icon_events.svg" loading="lazy" width="24" height="24" alt="" />
                            <h6>Community events</h6>
                            <p class="paragraph-9">Residents can host and attend <a href="#">events</a> through the Sugar application.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/5f308a2b74a261382ba87d49_Wave%20-%20Salmon.svg" loading="lazy" alt="" class="home-feature-section-wave-image" /></div>

    <!-- IMPORTANT SCRIPTS -->
    <script src="{{asset ('d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f308a2a4e2694784fd8c994')}}" type="text/javascript" ></script>
    <script src="{{asset ('assets.website-files.com/5f308a2a4e2694784fd8c994/js/sugarliving.772d89207.js')}}" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <!-- Global: Check to see if they've ever successfully filled out a lead form -->
    <script>
        if (sessionStorage.getItem('sugar_marketing_is_lead')) {
            console.log('Saved as Lead: ' + sessionStorage.getItem('sugar_marketing_is_lead'));
        } else {
            console.log('Saved as Lead: Nope');
        }
    </script>

    <!-- Global: Store the inboud URL if it's sourced from an Ad and submit it with the lead form-->
    <!-- Known shortcomming is overwriting if the user comes in from a different ad -->
    <script>
        let currentURL = window.location.href;
        let adMeta;
        let adSourceURL = "";
        let adSource = "";
        let exampleURL = "https://www.sugarliving.com/blog?c1=LNK_CM_NW&source=USA_PM&kw=pm__-__company_list__-__video--intro_video_v1&cr5=intro_video_v1&utm_source=linkedin&utm_medium=paid_social";

        function parseQuery(queryString) {
            var query = {};
            var pairs = (queryString[0] === '?' ? queryString.substr(1) : queryString).split('&');
            for (var i = 0; i < pairs.length; i++) {
                var pair = pairs[i].split('=');
                query[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
            }
            return query;
        }

        adMeta = parseQuery(currentURL);
        adSource = adMeta["source"];

        if (adSource) {
            console.log("Came from and ad: Yep");

            adSourceURL = currentURL;
            sessionStorage.setItem('sugar_ad_source_url', adSourceURL);
            console.log("The url is: " + sessionStorage.getItem('sugar_ad_source_url'));
        } else {
            console.log("Came from an ad: Nope");
            console.log("The url is: " + sessionStorage.getItem('sugar_ad_source_url'));
        }
    </script>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8F4LKQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Load Google Places API -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAURW4J-Bqgjd3F6jV-WW8RkLrwFz2_J0Y&libraries=places"></script>
  </body>
@endsection
