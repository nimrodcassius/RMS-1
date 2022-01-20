@extends('layouts.1')
@section('content')

<div class="page-content">
<div class="container-fluid">

  <!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0 font-size-18">House List</h4>
      </div>
  </div>
</div>
<!-- end page title -->

  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm">
                          <div class="mb-4">
                              <a href="{{route('houses1.create') }}"><button type="button" class="btn btn-light waves-effect waves-light"><i
                                      class="bx bx-plus me-1"></i> Add House</button></a>
                          </div>
                      </div>
                      <div class="col-sm-auto">
                          <div class="d-flex align-items-center gap-1 mb-4">
                              <div class="input-group datepicker-range">
                                  <input type="text" class="form-control flatpickr-input" data-input
                                      aria-describedby="date1">
                                  <button class="input-group-text" id="date1" data-toggle><i
                                          class="bx bx-calendar-event"></i></button>
                              </div>
                              <div class="dropdown">
                                  <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                      href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

                  <div class="table-responsive">
                      <table class="table align-middle datatable dt-responsive table-check nowrap"
                          style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                          <thead>
                              <tr class="bg-transparent">
                                  <th style="width: 30px;">
                                      <div class="form-check font-size-16">
                                          <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                          <label class="form-check-label" for="checkAll"></label>
                                      </div>
                                  </th>
                                  <th style="width: 120px;">House No</th>
                                  <th>Category</th>
                                  <th>Description</th>
                                  <th>Price</th>
                                  <th>Status</th>
                                  <th style="width: 90px;">Action</th>
                              </tr>
                          </thead>
                            @foreach($apartment as $key => $houses1)
                          <tbody>
                          <tr>
                                  <td>
                                      <div class="form-check font-size-16">
                                          <input type="checkbox" class="form-check-input">
                                          <label class="form-check-label"></label>
                                      </div>
                                  </td>

                                  <td><a href="javascript: void(0);" class="text-dark fw-medium">{{ $houses1->HouseNo }}</a> </td>
                                  <td>                                      {{ $houses1->Category }}                                  </td>
                                  <td>{{ $houses1->Description }}</td>
                                  <td>                                      {{ $houses1->Price }}                                  </td>
                                  <td>
                                      <div class="badge badge-soft-success font-size-12">Occupied</div>
                                  </td>

                              <td>    <div class="dropdown">
                                      <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                          href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="bx bx-dots-horizontal-rounded"></i>
                                      </a>

                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                                      </ul>
                                  </div></td>

                                </tr>
                                </tbody>
                                @endforeach
                      </table>
                  </div>
                  <!-- end table responsive -->
              </div>
              <!-- end card body -->
          </div>
          <!-- end card -->
      </div>
      <!-- end col -->
  </div>

            </div>
          </div>
@endsection
