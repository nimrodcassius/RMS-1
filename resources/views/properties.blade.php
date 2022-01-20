@extends('layouts.1')
@section('content')
<div class="page-content">
              <div class="container-fluid">

  <!-- start page title -->
  <!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0 font-size-18">Your Properties</h4>

      </div>
  </div>
</div>
<!-- end page title -->
  <div class="row align-items-center">
      <div class="col-md-6">
          <div class="mb-3">
              <h5 class="card-title">Properties List <span class="text-muted fw-normal ms-2"></span></h5>
          </div>
      </div>

      <div class="col-md-6">
          <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
              <div>
                  <ul class="nav nav-pills">
                      <li class="nav-item">
                          <a class="nav-link active" href="{{url ('properties')}}" data-bs-toggle="tooltip"
                              data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('propertiesgrid')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                              title="Grid"><i class="bx bx-grid-alt"></i></a>
                      </li>
                  </ul>
              </div>
              <div>
                  <a href="{{route('properties.create')}}" class="btn btn-light"><i class="bx bx-plus me-1"></i> New Property</a>
              </div>

              <div class="dropdown">
                  <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
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

  <div class="table-responsive mb-4">
      <table class="table align-middle datatable dt-responsive table-check nowrap"
          style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
          <thead>
              <tr>
                  <th scope="col" style="width: 50px;">
                      <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input" id="checkAll">
                          <label class="form-check-label" for="checkAll"></label>
                      </div>
                  </th>
                  <th scope="col">Property Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Email</th>
                  <th scope="col">Location</th>
                  <th style="width: 80px; min-width: 80px;">Action</th>
              </tr>
          </thead>
            @foreach($plain as $key => $properties)
          <tbody>
              <tr>
                  <th scope="row">
                      <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input" id="contacusercheck1">
                          <label class="form-check-label" for="contacusercheck1"></label>
                      </div>
                  </th>
                  <td>

                      <a href="#" class="text-body">{{$properties->PropertyName}}</a>
                  </td>
                  <td>{{$properties->Address}}</td>
                  <td>{{$properties->Email}}</td>
                  <td>
                      <div class="d-flex gap-2">
                          <a href="#" class="badge badge-soft-primary">{{$properties->Location}}</a>

                      </div>
                  </td>
                  <td>
                      <div class="dropdown">
                          <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-horizontal-rounded"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                      </div>
                  </td>
              </tr>

          </tbody>
          @endforeach
      </table>
      <!-- end table -->
  </div>
  <!-- end table responsive -->
              </div>

@endsection
