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
            <form method="post" action="{{ route('houses1.store') }}" enctype="multipart/form-data">
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
                  <input mdbInput type="text" class="form-control" name="HouseNo" id="HouseNo" placeholder="HouseNo">
                 </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Category</label>
                    <select mdbInput type="text" class="form-control" name="Category" id="Category" placeholder="Category">

                    <option></option>
                    <option>1 Bedroom</option>
                    <option>2 Bedroom</option>

                    </select>
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Description</label>
                    <input mdbInput type="text" class="form-control" name="Description" id="Description" placeholder="Description">
                  </div>
                  <!-- Default input -->
                  <div class="form-group mb-3">
                    <label>Price </label>
                    <input mdbInput type="text" class="form-control" name="Price" id="Price" placeholder="Price">
                  </div>
              </div>


                <!-- Grid row -->
                <div class="row clearfix">
                  <div class ="col-sm-12">
                    <button type="submit"  name="add" class="btn btn-primary">Submit</button>
                    <a href="{{ url('houses1') }}" class="btn btn-outline-secondary">Cancel</a>
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
