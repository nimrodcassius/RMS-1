@extends('layouts.1')

@section('content')
@if($errors->any())

<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div class="page-content" >

    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
            <form method="post" action="{{ route('tenants1.store') }}" enctype="multipart/form-data">
             @csrf
              <div class="card-header">
                  <h4 class="card-title">Textual inputs</h4>
                  <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                      textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
              </div>
              <div class="card-body p-4">

                <div class="body">
                <div class="row clearfix">

                  <!-- Default input -->
                  <div class="form-group mb-3">
                  <label>House Number</label>
                  <input mdbInput type="text" class="form-control" name="HouseNo" id="HouseNo" placeholder="House No">
                 </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Tenant Name</label>
                    <input mdbInput type="text" class="form-control" name="TenantName" id="TenantName" placeholder="Tenant Name">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Monthly Rate</label>
                    <input mdbInput type="text" class="form-control" name="MonthlyRate" id="MonthlyRate" placeholder="Monthly Rate">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Outstanding Balance </label>
                    <input mdbInput type="text" class="form-control" name="OutstandingBalance" id="OutstandingBalance" placeholder="Outstanding Balance">
                  </div>
                  <div class="form-group mb-3">

                      <label>Date and time</label>
                        <input mdbInput type="text" class="form-control" name="LastPayment" id="LastPayment" placeholder="Last Payment" type="datetime-local"id="example-datetime-local-input" >
                  </div>
              </div>


                <!-- Grid row -->
                <div class="row clearfix">
                  <div class ="col-sm-12">
                    <button type="submit"  name="add" class="btn btn-primary">Submit</button>
                    <a href="{{ url('tenants1') }}" class="btn btn-outline-secondary">Cancel</a>
              </div>
              </div>
                </div>
                  </div>
                  </>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    <!-- end row -->
@endsection
