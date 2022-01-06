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
                    <h2>Houses</h2>
                    <ul class="header-dropdown">
                      <div class="container-fluid">
                        <p>
                          <a href="{{route('houses.create') }}" class="btn btn-info">Add House
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
                                  <th><center>Category</center></th>
                                  <th><center>Description</center></th>
                                  <th><center>Price(Ksh)</center></th>
                                  <th><center>Status</center></th>


                              </tr>
                            </thead>
                            @foreach($apartment as $key => $houses)
                            <tbody style="color:black; font:blod; background:#ffff">
                             <tr class="text-center">

                              <td>{{ $houses->HouseNo }}</td>
                              <td>{{ $houses->Category }}</td>
                              <td>{{ $houses->Description }}</td>
                              <td>{{ $houses->Price }}</td>

                              <td><span class="badge badge-success">OCCUPIED</span></td>

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
