@extends('layouts.app')

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
<div class="container">
  <div class="block-header">
      <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-12">
              <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Houses</h2>
              <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                  <li class="breadcrumb-item active">House List</li>
              </ul>
          </div>
      </div>
  </div>
</div>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
<form method="post" action="{{ route('houses.store') }}" enctype="multipart/form-data">
 @csrf
<!-- Extended default form grid -->
<form>
  <!-- Grid row -->
  <div class="header">
    <h2>Basic Information <small>Description text here...</small> </h2>
        </div>
  <div class="body">
  <div class="row clearfix">
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="HouseNo" id="HouseNo" placeholder="HouseNo">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <select mdbInput type="text" class="form-control" name="Category" id="Category" placeholder="Category">
      
      <option></option>
      <option>1 Bedroom</option>
      <option>2 Bedroom</option>

      </select>
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="Description" id="Description" placeholder="Description">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="Price" id="Price" placeholder="Price">
    </div>
</div>

  <!-- Grid row -->
  <div class="row clearfix">
    <div class ="col-sm-12">
      <button type="submit"  name="add" class="btn btn-primary">Submit</button>
      <a href="{{ url('houses') }}" class="btn btn-outline-secondary">Cancel</a>
</div>
</div>
  </div>

</form>
<!-- Extended default form grid -->
</div>
 </div>

</form>
</div>
</div>
</div>

@endsection

@section('scripts')

<script>
 //---------------------Browse image----------------
 $('#browse_file').on('click',function(){
                            $('#image').click();
                        })
                        $('#image').on('change', function(e){
                            showFile(this, '#showImage');
                        })

</script>

@endsection
