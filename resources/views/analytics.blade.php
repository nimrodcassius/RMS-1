@extends('layouts.1')
@section('content')
<div class="page-content">
                <div class="container-fluid">

    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Editable Tables</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Editable Tables</li>
                                    </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
              <form method="post" action="{{ route('analytics.update', '$scar->id') }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')

                <div class="card-header">
                    <h4 class="card-title">Table Edit</h4>
                    <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.
                    </p>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th>House Number</th>
                                    <th>Previous Reading</th>
                                    <th>Current Reading</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>

                            <tbody>
                              <tr data-id="1">
                                  <td data-field="id" style="width: 80px">A1</td>
                                  <td data-field="name">122</td>
                                  <td data-field="age">131</td>
                                  <td style="width: 100px">
                                      <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                          <i class="fas fa-pencil-alt"></i>
                                      </a>
                                  </td>
                              </tr>
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

                </div>
@endsection
