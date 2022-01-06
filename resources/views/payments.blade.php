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
                    <h2>Payment List</h2>
                    <ul class="header-dropdown">
                      <div class="container-fluid">
                        <p>
                          <a href="{{route('payments.create') }}" class="btn btn-info">New Entry
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
                                  <th><center>Prev Meter Reading</center></th>
                                  <th><center>Curr Meter Reading</center></th>
                                  <th><center>Units consumed</center></th>
                                  <th><center>Garbage(Ksh)</center></th>
                                  <th><center>Total Payable(Ksh)</center></th>
                                  <th><center>Payment Code</center></th>
                                  <th><center>Action</center></th>


                              </tr>
                            </thead>
                            @foreach($cash as $key => $payments)
                            <tbody style="color:black; font:blod; background:#ffff">
                             <tr class="text-center">

                              <td>{{ $payments->HouseNo }}</td>
                              <td>{{ $payments->TenantName }}</td>
                              <td>{{ $payments->PrevWaterBill }}</td>
                              <td>{{ $payments->CurrWaterBill }}</td>
                              <td>{{ $payments->TotalWaterCons }}</td>
                              <td>{{ $payments->Garbage }}</td>
                              <td>{{ $payments->TotalPayable }}</td>
                              <td>{{ $payments->PaymentCode }}</td>
                              <td>
                              <a href="{{ route('payments.edit', $payments->id) }}"><button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button></a>

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
