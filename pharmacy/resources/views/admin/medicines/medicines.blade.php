@extends('layouts.admin_layout.admin_layout')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Medicines</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Medicines</li>
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

                <a href="{{url('admin/add-edit-medicine')}}" style="max-width:150px; float:right; display: inline-block;" class="btn btn-block btn-success">Add Medicine</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="manufacturers" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Actions</th>
                    <th>Name</th>
                    <th>Generic</th>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Dose</th>
                    <th>Description</th>
                    <th>Medicine Image</th>
                    <th>Medicine Price</th>
                    <th>Stock</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($medicines as $medicine)
                  <tr>
                    <td>{{$medicine->id}}</td>
                    <td> <a href="add-edit-medicine/{{$medicine->id}}">Edit</a> <a href="delete-medicine/{{$medicine->id}}">Delete</a> </td>
                    <td>{{$medicine->medicineName}}</td>
                    <td>{{$medicine->generic}}</td>
                    <td>{{$medicine->type}}</td>
                    <td>{{$medicine->quantity}}</td>
                    <td>{{$medicine->dose}}</td>
                    <td>{{$medicine->description}}</td>
                    <td> <img src="{{asset('images/medicine_images/'.$medicine->medicineImage)}}" alt=""> </td>
                    <td>{{$medicine->medicinePrice}}</td>
                    <td>{{$medicine->stock}}</td>

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
