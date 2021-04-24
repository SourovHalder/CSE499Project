@extends('layouts.app')
@section('content')

  
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="exampleFormControlFile1">Upload Your Presciption Here!</label>
        <br><br>
        

        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        <br>
        <button type="submit" class="btn btn-primary mb-2">Upload</button>
      </div>
    </div>
    </form>



  <label for="quantity">Money Amount (taka):</label>
  <input type="number" id="money" name="quantity" min="1" max="300000" >

  <br><br>
  
  <label for="quantity">Days:</label>
  <input type="number" id="days" name="quantity" min="1" max="60" >
  
  <br><br>
 
  <button type="submit" class="btn btn-primary mb-2">Submit </button>
</div>
    </div>
 
  

  @endsection

