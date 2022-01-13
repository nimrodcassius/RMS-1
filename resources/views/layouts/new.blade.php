<html data-wf-domain="www.sugarliving.com" data-wf-page="5f308a2b74a26142d2a87c8c" data-wf-site="5f308a2a4e2694784fd8c994">

<head>
    <meta charset="utf-8" />
    <title>Whispers - Welcome Home</title>
    <meta content="Meet whispers - a mobile app that allows residents to perform all tasks associated with living in your building and empowers them to engage with others within the community." name="description" />
    <meta content="Whispers - Welcome Home" property="og:title" />
    <meta content="Meet Whispers- a mobile app that allows residents to perform all tasks associated with living in your building and empowers them to engage with others within the community." property="og:description" />
    <meta content="Whispers - Welcome Home" property="twitter:title" />
    <meta content="Meet Swhispe s- a mobile app that allows residents to perform all tasks associated with living in your building and empowers them to engage with others within the community." property="twitter:description" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="{{asset ('assets.website-files.com/5f308a2a4e2694784fd8c994/css/sugarliving.a6c59284e.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset ('ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["DM Sans:regular,500,700"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="{{asset ('wp-content/uploads/2021/05/12.png')}}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset ('wp-content/uploads/2021/05/12.png')}}" rel="apple-touch-icon" />
    <script async="" src="{{asset ('www.googletagmanager.com/gtag/js?id=G-XCR459ZJ8W')}}"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-XCR459ZJ8W', {
            'anonymize_ip': false
        });
    </script>
    <script src="{{asset ('www.google.com/recaptcha/api.js')}}" async defer></script>
    <style>
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                "{{asset ('www.googletagmanager.com/gtm.js?id=')}}" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W8F4LKQ');
    </script>
    <!-- End Google Tag Manager -->
</head>

<script src="{{asset ('d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f308a2a4e2694784fd8c994')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
<body>


  <div id="main-content">
  @yield('content')
</body>
