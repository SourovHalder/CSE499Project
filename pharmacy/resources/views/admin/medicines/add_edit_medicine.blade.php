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
          <h1>{{$title}} Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">{{$title}}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <form name="medicineForm" id="medicineForm" @if(empty($medicineData['id'])) action="{{url('admin/add-edit-medicine')}}" @else action="{{url('admin/add-edit-medicine/'.$medicineData['id'])}}" @endif method="post" enctype="multipart/form-data">
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
                @if (!empty($medicineData['medicineName'])) value="{{$medicineData['medicineName']}}" @else value="{{old('medicineName')}}" @endif>
              </div>

              <div class="form-group">
                <label>Select Manufacturer</label>
                <select class="form-control select2" style="width: 100%" name="manufacturerId" id="manufacturerId">
                  <option value="">Select</option>
                  @foreach($getManufacturers as $manufacturer)
                  <option value="{{$manufacturer->id}}" @if(!empty(@old('manufacturerId')) && $manufacturer[id]==@old('manufacturerId')) selected="" @elseif(!empty($medicineData['manufacturerId'])) && $medicineData['manufacturerId']==$manufacturer['id'] selected="" @endif>{{$manufacturer->manufacturerName}}</option>
                  @endforeach
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="generic">Generic</label>
                <input type="text" class="form-control" id="generic" name="generic" placeholder="Enter Generic"
                @if (!empty($medicineData['generic'])) value="{{$medicineData['generic']}}" @else value="{{old('generic')}}" @endif>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="medicinePrice" name="medicinePrice" placeholder="Enter Price"
                @if (!empty($medicineData['medicinePrice'])) value="{{$medicineData['medicinePrice']}}" @else value="{{old('medicinePrice')}}" @endif>
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
                @if (!empty($medicineData['type'])) value="{{$medicineData['type']}}" @else value="{{old('type')}}" @endif>
              </div>

              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="pcs per pata"
                @if (!empty($medicineData['quantity'])) value="{{$medicineData['quantity']}}" @else value="{{old('quantity')}}" @endif>
              </div>

              <div class="form-group">
                <label for="dose">Dose</label>
                <input type="text" class="form-control" id="dose" name="dose" placeholder="mg/ml per pc"
                @if (!empty($medicineData['dose'])) value="{{$medicineData['dose']}}" @else value="{{old('dose')}}" @endif>
              </div>

              <div class="form-group">
                <label for="stock">Stock Units</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock Units"
                @if (!empty($medicineData['stock'])) value="{{$medicineData['stock']}}" @else value="{{old('stock')}}" @endif>
              </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Medicine Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="medicineImage" name="medicineImage"
                  @if (!empty($medicineData['medicineImage'])) value="{{$medicineData['medicineImage']}}" @else value="{{old('medicineImage')}}" @endif>
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
