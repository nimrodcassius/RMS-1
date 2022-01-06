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
          <!-- <div class="col-lg-6 col-md-8 col-sm-12">
              <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Houses</h2>
              <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                  <li class="breadcrumb-item active">House List</li>
              </ul>
          </div> -->
      </div>
  </div>
</div>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
<form method="post" action="{{ route('payments.update', $data->id) }}" enctype="multipart/form-data">
 @csrf
 @method('PUT')
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
      <input mdbInput type="text" class="form-control" name="HouseNo" id="HouseNo" value="{{ $data->HouseNo }}" placeholder="House No">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="TenantName" id="TenantName" value="{{ $data->TenantName }}" placeholder="Tenant Name">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="PrevWaterBill" id="PrevWaterBill" value="{{ $data->PrevWaterBill }}" placeholder="Prev Meter Reading">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="CurrWaterBill" id="CurrWaterBill" value="{{ $data->CurrWaterBill }}" placeholder="Curr Meter Reading">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="TotalWaterCons" id="TotalWaterCons" value="{{ $data->TotalWaterCons }}" placeholder="Total Water Consumption">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="Garbage" id="Garbage" value="{{ $data->Garbage }}" placeholder="Garbage">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="TotalPayable" id="TotalPayable" value="{{ $data->TotalPayable }}" placeholder="Total Payable">
    </div>
    <!-- Default input -->
    <div class="form-group col-sm-4">
      <input mdbInput type="text" class="form-control" name="PaymentCode" id="PaymentCode" value="{{ $data->PaymentCode }}" placeholder="Payment Code">
    </div>



</div>


  <!-- Grid row -->
  <div class="row clearfix">
    <div class ="col-sm-12">
      <button type="submit"  name="add" class="btn btn-primary">Submit</button>
      <a href="{{ url('payments') }}" class="btn btn-outline-secondary">Cancel</a>
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
