@extends('layouts.new')
@section('content')
<body class="body">
    <div data-animation="default" class="navbar-section w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="8e7d6612-01c7-9bb0-1b73-9c98c9ce27b9" role="banner" data-duration="400" id="Navbar">
        <div class="navbar-banner"><a href="/arex-engagement-survey" class="navbar-banner-text">🎉 Check out Sugar&#x27;s new AREX Score™</a></div>
        <div class="navbar">
            <div class="navbar-container">
                <div class="navbar-left"><a href="/" aria-current="page" class="brand w-nav-brand w--current"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/612447ea40d29793359d254a_navbar_sugar_logo.svg" width="100" alt=""/></a></div>
                <nav role="navigation"
                    class="nav-menu w-nav-menu"><a href="/company" class="nav-link w-nav-link">About</a><a href="/pricing" class="nav-link w-nav-link">Pricing</a><a href="/partner" class="nav-link w-nav-link">Partners</a><a href="/blog" class="nav-link w-nav-link">Blog</a></nav>
                <div
                    class="navbar-right">
                    <div class="navbar-actions"><a href="https://portal.sugarliving.com/login" class="button-navigation button-light w-button">Sign in</a><a href="/demo" class="button-navigation w-button">Watch video</a></div>
                    <div class="menu-button w-nav-button">
                        <div class="icon-2 w-icon-nav-menu"></div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    <div class="home-hero">
        <div style="opacity:0" class="home-hero-container"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/612585381160593d5f732577_home_hero_sun.svg" loading="lazy" alt="" class="home-hero-sunset" />
            <div class="home-hero-content">
                <div class="home-hero-copy">
                    <div class="news-wire-list">
                        <a data-w-id="966dd18d-1b4c-a635-cc35-99b3cf320e85" href="/arex-engagement-survey" class="news-wire-link w-inline-block">
                            <div class="text-block-84">See where you rank with Sugar&#x27;s AREX Score™</div>
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

                        <h1 class="home-hero-heading"><span data-words="Build|Upgrade|Connect|Manage|Monetize|Streamline|Digitize">Build</span> your apartment community</h1>
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
                    <p>Property managers use Sugar to offer a best-in-class resident experience while building community and saving money. <br/></p>
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
                    <div class="home-hero-location-lookup-form w-form">
                        <form id="wf-form-Home-Property-Lookup-Form" name="wf-form-Home-Property-Lookup-Form" data-name="Home Property Lookup Form" redirect="/contact-new-location" data-redirect="/contact-new-location" method="get" class="home-hero-lookup-form-container"><input type="text" class="home-hero-property-lookup-field w-input" maxlength="256" name="field" data-name="Field" placeholder="Your property address" id="property-lookup-field" required="" /><input type="submit" value="Check Availability"
                                data-wait="Please wait..." class="button button-large w-button" /></form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="actions w-container"><a href="/demo-book" class="button button-outline button-transparent w-button">Book 15 min demo</a></div>
                </div>
                <div class="home-hero-image-wrapper"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image.png" loading="eager" sizes="(max-width: 991px) 100vw, 874.5px" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-500.png 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-800.png 800w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-1080.png 1080w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image-p-1600.png 1600w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/615225f4c66790e0c3e16e5d_home_hero_image.png 2605w"
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
                </div>
            </div>
        </div>
    </div>
    <div style="opacity:0" class="social-proof-section">
        <div class="container">
            <div class="social-proof-collection w-container"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6126e02293fa7472dfd31ba7_output-onlinepngtools%20(9).png" loading="lazy" width="118" height="32" alt="" /><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6126dff5c73f92d2cb36c72f_output-onlinepngtools%20(13).png"
                    loading="lazy" sizes="(max-width: 991px) 100vw, 133.734375px" height="32" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6126dff5c73f92d2cb36c72f_output-onlinepngtools%20(13)-p-500.png 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6126dff5c73f92d2cb36c72f_output-onlinepngtools%20(13)-p-800.png 800w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6126dff5c73f92d2cb36c72f_output-onlinepngtools%20(13).png 1024w"
                    alt="" class="image-31" /><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6126e05c3f45634645f48624_output-onlinepngtools%20(11).png" loading="lazy" height="32" alt="" /><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6126e0886120a64ee1d17119_output-onlinepngtools%20(12).png"
                    loading="lazy" height="32" alt="" /><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/612d76a95944c9a5307ff622_output-onlinepngtools%20(14).png" loading="lazy" width="144" height="32" alt="" class="image-30" /></div>
        </div>
    </div>
    <div style="opacity:0" class="home-feature-section">
        <div class="home-feature-container">
            <div class="home-feature-content-container">
                <div class="home-feature-section-copu">
                    <h4><strong class="bold-text-2">Manager portal</strong></h4>
                    <h1><strong class="bold-text">Explore new ways to engage with residents</strong></h1>
                    <p>Sugar&#x27;s manager portal allows you to easily onboard new residents and communicate in real time. You can manage keys, schedule events, send announcements and more.</p>
                    <div class="actions w-container"><a href="http://portal.sugarliving.com" class="button button-outline w-button">Explore the portal</a><a href="/demo" class="button w-button">Watch video</a></div>
                    <div class="home-feature-section-feature-outline">
                        <div class="home-feature-outline-block"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/61257f30243035d787afe2bc_home_feature_icon_messages.svg" loading="lazy" width="24" height="24" alt="" />
                            <h6>Real-time messaging</h6>
                            <p class="paragraph-9">Send <a href="/features">messages</a> to residents instantly within Sugar’s online portal.</p>
                        </div>
                        <div class="home-feature-outline-block"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/61257f302c2ea6e176fa0891_home_feature_icon_community.svg" loading="lazy" width="24" height="24" alt="" />
                            <h6>Community posts</h6>
                            <p class="paragraph-9">Make announcements to the entire building with <a href="#">posts</a> that show up in the resident <a href="#">mobile application.</a></p>
                        </div>
                    </div>
                </div>
                <div class="home-hero-image-wrapper"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127de35abd820d9b9c21d7a_home_feature_management_image.png" loading="eager" sizes="(max-width: 991px) 100vw, 872.953125px" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127de35abd820d9b9c21d7a_home_feature_management_image-p-500.png 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127de35abd820d9b9c21d7a_home_feature_management_image-p-800.png 800w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127de35abd820d9b9c21d7a_home_feature_management_image-p-1080.png 1080w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127de35abd820d9b9c21d7a_home_feature_management_image-p-1600.png 1600w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127de35abd820d9b9c21d7a_home_feature_management_image-p-2000.png 2000w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127de35abd820d9b9c21d7a_home_feature_management_image.png 2341w"
                        alt="" class="home-feature-management-image" /></div>
            </div>
        </div>
    </div>
    <div class="home-feature-section with-wave">
        <div class="home-feature-container gray-bg">
            <div class="home-feature-content-container">
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
                <div class="home-hero-image-wrapper"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array.png" loading="lazy" sizes="(max-width: 991px) 100vw, 876.34375px" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array-p-500.png 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array-p-800.png 800w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array-p-1080.png 1080w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/61413e4b9398a87d8d7c7211_home-mobile-array.png 1504w"
                        alt="" class="home-feature-mobile-image" /></div>
            </div>
        </div><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/5f308a2b74a261382ba87d49_Wave%20-%20Salmon.svg" loading="lazy" alt="" class="home-feature-section-wave-image" /></div>
    <div style="opacity:0" class="home-feature-section">
        <div class="home-feature-container">
            <div class="home-feature-content-container">
                <div class="home-feature-section-copu">
                    <h4><strong class="bold-text-2">Access Control Integrations</strong></h4>
                    <h1><strong class="bold-text">Save time and money on key management</strong></h1>
                    <p>Sugar&#x27;s digital call box and integrations with access control providers help you manage residents&#x27; access within the building without the hassle. </p>
                    <div class="actions w-container"><a href="http://portal.sugarliving.com" class="button button-outline w-button">Explore the portal</a></div>
                    <div class="home-feature-section-feature-outline">
                        <div class="home-feature-outline-block"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6125840aa611014feb84c80f_home_feature_icon_call_box.svg" loading="lazy" width="24" height="24" alt="" />
                            <h6>Digital call box</h6>
                            <p class="paragraph-9">Avoid costly hardware installations using Sugar&#x27;s <a href="#">digital directory</a> and QR code call box experience.</p>
                        </div>
                        <div class="home-feature-outline-block"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6125840b44f54b90c1293c65_home_feature_icon_key.svg" loading="lazy" width="24" height="24" alt="" />
                            <h6>Key sharing</h6>
                            <p class="paragraph-9">Use Sugar&#x27;s <a href="#">key sharing</a> to reduce overhead in lost keys and simplify guest management.</p>
                        </div>
                    </div>
                </div>
                <div class="home-hero-image-wrapper"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image.png" loading="lazy" sizes="(max-width: 991px) 100vw, 93vw" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image-p-500.png 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image-p-800.png 800w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image-p-1080.png 1080w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image-p-1600.png 1600w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image-p-2000.png 2000w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image-p-2600.png 2600w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6127eec40be65c2e94645879_home_feature_keyless_image.png 2642w"
                        alt="" class="home-hero-image" />
                    <div class="w-embed">
                        <style>
                            .home-access-control-app-video-container {
                                position: absolute;
                                top: 174px;
                                left: 114px;
                                height: 460px;
                                border-radius: 25px;
                                overflow: hidden;
                            }

                            .home-access-control-app-video {
                                height: 100%;
                            }
                        </style>

                        <div class="home-access-control-app-video-container">
                            <video autoplay muted playsinline loop class="home-access-control-app-video">
		<source src="https://drive.google.com/uc?export=view&id=1cqmwuaBslNBWRJ_YjSpMmsczM-tftSkn" type="video/mp4">
	</video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="opacity:0" class="testimonial-section home-testimonial-section">
        <div class="w-layout-grid testimonal-section-grid">
            <div id="w-node-_88d0be4a-d4e2-c9cc-6c13-4ece49336924-d2a87c8c" class="testimonial-section-block testimonial-block-secondary w-container"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/612517c507dedc382a6d1740_testimonal_image_jared.png" loading="lazy" width="64" height="64" alt="" class="testimonal-block-avatar" />
                <p class="testimonial-block-quote">“We&#x27;re excited at the ability to promote so many building-wide events inside the platform and see increased event turnout as a result”.</p>
                <div class="testimonial-block-source">
                    <p class="testimonial-block-title">Jared Jackson</p>
                    <p class="testimonial-block-name">Community Manager, AMC</p>
                </div>
            </div>
            <div id="w-node-_88d0be4a-d4e2-c9cc-6c13-4ece4933692d-d2a87c8c" class="testimonial-section-block testimonial-block-primary w-container"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/612517c4818df6fa372a69d7_testimonial_image_sof.png" loading="lazy" width="64" height="64" alt="" class="testimonal-block-avatar" />
                <p class="testimonial-block-quote">“EQ is committed to improving resident experience and is determined to establish a sense of community as a company. Sugar will be a catalyst in establishing these concepts at every property across the portfolio”.</p>
                <div class="testimonial-block-source">
                    <p class="testimonial-block-title">Sof Astatke</p>
                    <p class="testimonial-block-name">Partner, Equilibrium Investments</p>
                </div>
            </div>
            <div id="w-node-_88d0be4a-d4e2-c9cc-6c13-4ece49336936-d2a87c8c" class="testimonial-section-block testimonial-block-secondary w-container"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/5fa377610cc88264ee370150_0%20(2).jpeg" loading="lazy" width="64" height="64" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/5fa377610cc88264ee370150_0%20(2)-p-500.jpeg 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/5fa377610cc88264ee370150_0%20(2).jpeg 629w"
                    sizes="(max-width: 991px) 100vw, 64px" alt="" class="testimonal-block-avatar" />
                <p class="testimonial-block-quote">“The process of setting up Sugar in our building was super simple. I was able to send a download link to all existing residents so they could download the app. Residents started using the app immediately, and love it”.</p>
                <div class="testimonial-block-source">
                    <p class="testimonial-block-title">Chris Furman</p>
                    <p class="testimonial-block-name">VP of Asset Management, CGI Real Estate</p>
                </div>
            </div>
            <div id="w-node-_88d0be4a-d4e2-c9cc-6c13-4ece4933693f-d2a87c8c" class="testimonial-section-block testimonial-block-highlight w-container"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6125275707dedc587a6d7799_testimonial_highlight_pie_chart.svg" loading="lazy" width="130" height="130" alt="" class="testimonal-block-avatar" />
                <p class="testimonial-block-highlight-copy">87% of multifamily residents say a building’s community and amenities significantly impact their renting decision.</p>
                <div class="testimonial-block-source">
                    <p class="testimonial-block-footnote">*Source: 2020 NMHC/Kingsley Apartment Resident Preferences Report (www.nmhc.org)</p>
                </div>
            </div>
        </div>
    </div>
    <div style="opacity:0" class="content-section">
        <div class="container">
            <div class="demo-cta-columns w-row">
                <div class="demo-cta-content w-col w-col-4 w-col-stack">
                    <h1>Offer a resident experience that stands out</h1>
                    <p class="paragraph-8">Sugar’s property management portal and resident application are helping properties managers increase lease activity, reduce churn, and lower operating costs. Learn how.</p>
                    <div class="actions w-container"><a href="/demo" class="button button-outline w-button">Get started</a><a href="/demo" class="button w-button">Watch video</a></div>
                </div>
                <div class="demo-cta-image w-col w-col-8 w-col-stack"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6152272f16d274ef7724477b_demo_software_hero.png" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 91vw, (max-width: 991px) 92vw, 61vw" srcset="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6152272f16d274ef7724477b_demo_software_hero-p-500.png 500w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6152272f16d274ef7724477b_demo_software_hero-p-800.png 800w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6152272f16d274ef7724477b_demo_software_hero-p-1080.png 1080w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6152272f16d274ef7724477b_demo_software_hero-p-1600.png 1600w, https://assets.website-files.com/5f308a2a4e2694784fd8c994/6152272f16d274ef7724477b_demo_software_hero.png 2475w"
                        alt="" class="demo-cta-softare-hero" /></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="w-layout-grid footer-grid">
                <div id="w-node-addabdca-e13b-a6ec-1613-b337b8f5df82-b8f5df7e" class="footer-column"><a href="/" aria-current="page" class="footer-link w--current">Home</a><a href="/company" class="footer-link">About Us</a><a href="/pricing" class="footer-link">Pricing</a><a href="/demo-book" class="footer-link">Demo</a></div>
                <div id="w-node-addabdca-e13b-a6ec-1613-b337b8f5df8d-b8f5df7e"
                    class="footer-column"><a href="https://boards.greenhouse.io/sugar?t=5208ea154us" target="_blank" class="footer-link">Careers</a><a href="mailto:hello@sugarliving.com?subject=Press%20Inquiry" class="footer-link">Press</a><a href="https://sugarliving.com/terms-conditions"
                        class="footer-link">Terms &amp; Conditions</a><a href="http://www.sugarliving.com/privacy-policy" class="footer-link">Privacy Policy</a></div>
                <div id="w-node-addabdca-e13b-a6ec-1613-b337b8f5df98-b8f5df7e" class="footer-column"><a href="/faq" class="footer-link">FAQ</a><a href="/blog" class="footer-link">Blog</a><a href="/contact" class="footer-link">Contact Us</a></div>
                <div id="w-node-_36df4094-8123-c990-6ee2-fb109c7cb3ef-b8f5df7e" class="footer-column"><a href="https://portal.sugarliving.com/login" class="button w-button">Sign in</a></div>
            </div>
            <div class="legal-block"><img src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/6124479e48c672198ec5e4f2_navbar_dark_sugar_logo.svg" loading="lazy" alt="" />
                <div class="legal-text">© 2021 Sugar, Inc.<a href="http://webflow.com/" target="_blank"></a></div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f308a2a4e2694784fd8c994" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://assets.website-files.com/5f308a2a4e2694784fd8c994/js/sugarliving.772d89207.js" type="text/javascript"></script>
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
