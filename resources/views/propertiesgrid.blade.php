@extends('layouts.1')
@section('content')
<div class="page-content">
                <div class="container-fluid">



      <!-- <body data-layout="horizontal"> -->

      <!-- start page title -->
      <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Your Properties</h4>

        </div>
    </div>
</div>
<!-- end page title -->      <!-- end page title -->


      <div class="row align-items-center">
          <div class="col-md-6">
              <div class="mb-3">
                  <h5 class="card-title">Property List <span class="text-muted fw-normal ms-2"></span></h5>
              </div>
          </div>

          <div class="col-md-6">
              <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                  <div>
                      <ul class="nav nav-pills">
                          <li class="nav-item">
                              <a class="nav-link" href="{{url ('properties')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                                  title="List"><i class="bx bx-list-ul"></i></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="{{url ('propertiesgrid')}}" data-bs-toggle="tooltip"
                                  data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                  </div>

                  <div class="dropdown">
                      <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#"
                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                      </a>

                      <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                  </div>
              </div>

          </div>
      </div>
      <!-- end row -->

      <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown text-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Remove</a>
                        </div>
                    </div>

                    <div class="mx-auto mb-4">
                        <img src="{{asset ('assets1/images/small/img-3.png')}}" alt="" class="avatar-xl rounded-circle img-thumbnail">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Whispers Residence</a></h5>
                    <p class="text-muted mb-2">00100-Utawala,Nairobi</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i>
                        Profile</button>
                    <button type="button" class="btn btn-outline-light text-truncate"><i
                            class="uil uil-envelope-alt me-1"></i> Message</button>

                </div>
            </div>
            <!-- end card -->
        </div>

      </div>
      <!-- end row -->

      <div class="row g-0 align-items-center mb-4">
          <div class="col-sm-6">
              <div>
                  <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="float-sm-end">
                  <ul class="pagination mb-sm-0">
                      <li class="page-item disabled">
                          <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                      </li>
                      <li class="page-item">
                          <a href="#" class="page-link">1</a>
                      </li>
                      <li class="page-item active">
                          <a href="#" class="page-link">2</a>
                      </li>
                      <li class="page-item">
                          <a href="#" class="page-link">3</a>
                      </li>
                      <li class="page-item">
                          <a href="#" class="page-link">4</a>
                      </li>
                      <li class="page-item">
                          <a href="#" class="page-link">5</a>
                      </li>
                      <li class="page-item">
                          <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <!-- end row -->
                  </div>
@endsection
