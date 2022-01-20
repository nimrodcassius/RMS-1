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
            <form method="post" action="{{ route('properties.store') }}" enctype="multipart/form-data">
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
                  <label>Property Name</label>
                  <input mdbInput type="text" class="form-control" name="PropertyName" id="PropertyName" placeholder="Property Name">
                 </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Address</label>
                    <input mdbInput type="text" class="form-control" name="Address" id="Address" placeholder="Address">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Email</label>
                    <input mdbInput type="text" class="form-control" name="Email" id="Email" placeholder="Email">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Location</label>
                    <input mdbInput type="text" class="form-control" name="Location" id="Location" placeholder="Location">
                  </div>
              </div>


                <!-- Grid row -->
                <div class="row clearfix">
                  <div class ="col-sm-12">
                    <button type="submit"  name="add" class="btn btn-primary">Submit</button>
                    <a href="{{ url('properties') }}" class="btn btn-outline-secondary">Cancel</a>
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
