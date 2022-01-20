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
            <form method="post" action="{{ route('payments1.store') }}" enctype="multipart/form-data">
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
                  <label>Payment ID</label>
                  <input mdbInput type="text" class="form-control" name="PaymentId" id="PaymentId" placeholder="Payment Id">
                 </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Date</label>
                    <input mdbInput type="text" class="form-control" name="Date" id="Date" placeholder="Date">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Tenant Name</label>
                    <input mdbInput type="text" class="form-control" name="TenantName" id="TenantName" placeholder="Tenant Name">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Amount</label>
                    <input mdbInput type="text" class="form-control" name="Amount" id="Amount" placeholder="Amount">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Status</label>
                    <input mdbInput type="text" class="form-control" name="Status" id="Status" placeholder="Status">
                  </div>
              </div>


                <!-- Grid row -->
                <div class="row clearfix">
                  <div class ="col-sm-12">
                    <button type="submit"  name="add" class="btn btn-primary">Submit</button>
                    <a href="{{ url('payments1') }}" class="btn btn-outline-secondary">Cancel</a>
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
