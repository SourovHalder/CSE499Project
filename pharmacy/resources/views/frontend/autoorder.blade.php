@extends('layouts.app')
@section('content')


<form action="{{ url('autocart') }}" method="post" class="form-horizontal qtyFrm" enctype="multipart/form-data">
  @csrf
  <label for="exampleFormControlFile1">Upload Your Presciption Here!</label>
    
      <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
    <br>
      <label for="days">Days</label>
      <input type="number" class="form-control" id="days" name="days" placeholder="days">
      <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" >
    
  <br><br>
  
 
    <label for="stock">Money Amount</label>
    <input type="number" class="form-control" id="money_amount" name="money_amount" placeholder="Money Amount">
 
  <br><br>
   <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart </button>
     
    </form>





</div>
    </div>
 
  
  </form>
  @endsection

