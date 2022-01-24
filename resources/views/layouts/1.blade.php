<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>  Dashboard  | Whispers </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content=" Dashboard " name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset ('assets1/images/favicon.ico')}}">
    <link href="{{asset ('assets1/libs/jquery-vectormap/jquery-vectormap.min.css')}}/" rel="stylesheet"
        type="text/css" />

 <link rel="stylesheet" href="{{asset ('assets1/css/preloader.min.css')}}" type="text/css" />
 <!-- flatpickr css -->
   <link href="{{asset ('assets1/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css">

   <!-- DataTables -->
   <link href="{{asset ('assets1/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
 <!-- Bootstrap Css -->
 <link href="{{asset ('assets1/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet"
     type="text/css" />
 <!-- Icons Css -->
 <link href="{{asset ('assets1/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="{{asset ('assets1/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


</head>
<body>
  <div id="layout-wrapper">
      <header id="page-topbar">
  <div class="navbar-header">
      <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
              <a href="index" class="logo logo-dark">
                  <span class="logo-sm">
                      <img src="{{asset ('assets1/images/logo-sm.svg')}}" alt="" height="24">
                  </span>
                  <span class="logo-lg">
                      <img src="{{asset ('assets1/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Whispers</span>
                  </span>
              </a>

              <a href="index" class="logo logo-light">
                  <span class="logo-sm">
                      <img src="{{asset ('assets1/images/logo-sm.svg')}}" alt="" height="24">
                  </span>
                  <span class="logo-lg">
                      <img src="{{asset ('assets1/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Whispers</span>
                  </span>
              </a>
          </div>

          <!-- App Search-->
          <form class="app-search d-none d-lg-block">
              <div class="position-relative">
                  <input type="text" class="form-control" placeholder="Search...">
                  <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
              </div>
          </form>
      </div>

      <div class="d-flex">

          <div class="dropdown d-inline-block d-lg-none ms-2">
              <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i data-feather="search" class="icon-lg"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                  aria-labelledby="page-header-search-dropdown">

                  <form class="p-3">
                      <div class="form-group m-0">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search ..."
                                  aria-label="Search Result">

                              <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

          <div class="dropdown d-none d-sm-inline-block">
              <button type="button" class="btn header-item" id="mode-setting-btn">
                  <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                  <i data-feather="sun" class="icon-lg layout-mode-light"></i>
              </button>
          </div>


              <button type="button" class="btn header-item bg-soft-light border-start border-end"
                  id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  <span class="d-none d-xl-inline-block ms-1 fw-medium">Frank Arisa</span>
                  <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
              
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="javascript:void();"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                          class="mdi mdi-logout font-size-16 align-middle me-1"></i> <span key="t-logout">Log
                          Out</span>
                        </a>
                  <form id="logout-form" action="http://minia-light.laravel.themesbrand.com/logout" method="POST" style="display: none;">
                      <input type="hidden" name="_token" value="51VvknvzqiT1QqBM38WGARY4ZSv3uU90EQxH8wiM">                    </form>
              </div>
          </div>

      </div>

</header>


<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <div>
                <ul class="nav nav-pills">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('dashboard1')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Grid"><i class="bx bx-home"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('properties')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Grid"><i class="bx bx-building-house"></i>Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('analytics')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Grid"><i class="bx bx-grid-alt"></i>Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('events')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Grid"><i class="bx bx-calendar-event"></i>Events</a>
                    </li>
                </ul>
            </div>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="{{asset ('assets1/images/giftbox.png')}}" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                        <p class="font-size-13">
                            Upgrade your plan from a Free trial, to select 'Business Plan'.</p>
                        <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>

<div class="main-content">
@yield('content')
</div>

</div>


  <script src="{{asset ('assets1/libs/jquery/jquery.min.js')}}"></script>
  <script src="{{asset ('assets1/libs/bootstrap/bootstrap.min.js')}}"></script>

  <script src="{{asset ('assets1/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset ('assets1/libs/node-waves/node-waves.min.js')}}"></script>
  <script src="{{asset ('assets1/libs/feather-icons/feather-icons.min.js')}}"></script>

  <!-- pace js -->
  <script src="{{asset ('assets1/libs/pace-js/pace-js.min.js')}}"></script>
      <script src="{{asset ('assets1/libs/apexcharts/apexcharts.min.js')}}"></script>

      <!-- Plugins js-->
      <script src="{{asset ('assets1/libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>

      <!-- dashboard init -->
      <script src="{{asset ('assets1/js/pages/dashboard.init.js')}}"></script>


  <script src="{{asset ('assets1/js/app.min.js')}}"></script>
  <!-- flatpickr js -->
   <script src="{{asset ('assets1/libs/flatpickr/flatpickr.min.js')}}"></script>

   <!-- Required datatable js -->
   <script src="{{asset ('assets1/libs/datatables/datatables.min.js')}}"></script>
   <!-- init js -->
   <script src="{{asset ('assets1/js/pages/invoices-list.init.js')}}"></script>

   <!-- init js -->
   <script src="{{asset ('assets1/js/pages/datatable-pages.init.js')}}"></script>
   <script src="{{asset ('assets1/libs/table-edits/table-edits.min.js')}}"></script>

    <script src="{{asset ('assets1/js/pages/table-editable.int.js')}}"></script>
    <script src="{{asset ('assets1/js/main.js')}}"></script>

<!-- Calendar init -->
<script src="{{asset ('assets1/js/pages/calendar.init.js')}}"></script>



</body>
</html>
