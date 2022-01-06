@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12">
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card patients-list">
                <div class="header">
                    <h2>Tenant List</h2>
                    <ul class="header-dropdown">
                      <div class="container-fluid">
                        <p>
                          <a href="{{route('tenants.create') }}" class="btn btn-info">Add Tenant
                              </a>
                            </p>
                      </div>
                    </ul>
                </div>
                <div class="body">
                  <table class="table m-b-0 table-hover">
                      <thead class="thead-dark">
                        <tr>

                                  <th><center>House Number</center></th>
                                  <th><center>Tenants Name</center></th>
                                  <th><center>Monthly Rate(Ksh)</center></th>
                                  <th><center>Outstanding Balance(Ksh)</center></th>
                                  <th><center>Last Payment</center></th>
                                  <th><center>Action</center></th>


                              </tr>
                            </thead>
                            @foreach($whispers as $key => $tenants)
                            <tbody style="color:black; font:blod; background:#ffff">
                             <tr class="text-center">

                              <td>{{ $tenants->HouseNo }}</td>
                              <td>{{ $tenants->TenantName }}</td>
                              <td>{{ $tenants->MonthlyRate }}</td>
                              <td>{{ $tenants->OutstandingBalance }}</td>
                              <td>{{ $tenants->LastPayment }}</td>
                              <td>
                                <form action="{{ route('tenants.destroy', $tenants->id) }}" method="post">
                              <a href="{{ route('tenants.edit', $tenants->id) }}"><button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button></a>

                              <button type="submit" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                              @csrf
	                            @method('DELETE')
                            </form>
                              </td>

                              <!-- <td><span class="badge badge-success">OCCUPIED</span></td> -->

                              </td>
                             </tr>
                             </tbody>
                            @endforeach
                           </table>

                          </table>
            </div>
        </div>
    </div>
</div>
@endsection
