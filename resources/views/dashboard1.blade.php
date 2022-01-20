@extends('layouts.1')
@section('content')
<div class="page-content">
          <div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
      <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

  </div>
</div>
</div>
<!-- end page title -->
<div class="row">
        <div class="col-xl-4 col-md-6">

                  <!-- Simple card -->
                  <div class="card">
                      <img class="card-img-top img-fluid" src="assets1/images/small/HOUSES (5).png" alt="Card image cap">
                      <div class="card-body">
                          <span class="badge bg-soft-success text-success">Esteemed</span>
                          <p></p>
                          <a href="{{url('tenants1')}}" class="btn btn-primary waves-effect waves-light">View Tenants</a>
                      </div>
                  </div>

              </div><!-- end col -->

              <div class="col-xl-4 col-md-6">

                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="assets1/images/small/HOUSES (3).png" alt="Card image cap">
                            <div class="card-body">
                                <span class="badge bg-soft-success text-success">Occupied</span>
                                <p></p>
                                <a href="{{url('houses1')}}" class="btn btn-primary waves-effect waves-light">View Houses</a>
                            </div>
                        </div>

                    </div><!-- end col -->

        <div class="col-xl-4 col-md-6">
            <!-- card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="assets1/images/small/img-5.png" alt="Card image cap">
                <div class="card-body">
                    <span class="badge bg-soft-success text-success">Invoices</span>
                    <p></p>
                    <a href="{{url('payments1')}}" class="btn btn-primary waves-effect waves-light">View Payments</a>
                </div>
            </div>
        </div><!-- end col -->

    </div><!-- end row-->



          </div>
          <!-- container-fluid -->
      </div>

@endsection
