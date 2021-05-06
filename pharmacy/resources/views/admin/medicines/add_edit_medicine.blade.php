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
          <h1> Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <form name="medicineForm" id="medicineForm" 
        @csrf
        <div class="card card-default">
        <div class="card-header">


          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>

          </div>
        </div>
        <!-- /.card-header -->


        <div class="card-body">
          <div class="row">
            <div class="col-md-6">

              <div class="form-group">
                <label for="medicineName">Medicine Name</label>
                <input type="text" class="form-control" id="medicineName" name="medicineName" placeholder="Enter Medicine Name"
               
              </div>

              <div class="form-group">
                <label>Select Manufacturer</label>
                <select class="form-control select2" style="width: 100%" name="manufacturerId" id="manufacturerId">
                  <option value="">Select</option>
                  
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="generic">Generic</label>
                <input type="text" class="form-control" id="generic" name="generic" placeholder="Enter Generic"
               
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="medicinePrice" name="medicinePrice" placeholder="Enter Price"
               
              </div>

              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter Description">  @if (!empty($medicineData['description'])) {{$medicineData['description']}} @else {{old('description')}} @endif</textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tablet, Capsule etc."
               
              </div>

              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="pcs per pata"
                
              </div>

              <div class="form-group">
                <label for="dose">Dose</label>
                <input type="text" class="form-control" id="dose" name="dose" placeholder="mg/ml per pc"
              
              </div>

              <div class="form-group">
                <label for="stock">Stock Units</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock Units"
                
              </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Medicine Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="medicineImage" name="medicineImage"
                
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>



          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

          </div>
          <!-- /.row -->


          <!-- /.row -->
        </div>
        </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      </div>

          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>




@endsection
