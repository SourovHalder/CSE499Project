@extends('layouts.admin_layout.admin_layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/app.css">

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manufacturers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manufacturers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">

                <!--<a href="{{url('admin/add-edit-manufacturer')}}" style="max-width:150px; float:right; display: inline-block;" class="btn btn-block btn-success">Add Manufacturer</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="manufacturers" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($manufacturers as $manufacturer)
                  <tr>
                    <td>{{$manufacturer->id}}</td>
                    <td>{{$manufacturer->manufacturerName}}</td>
                  </tr>
                  @endforeach

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
