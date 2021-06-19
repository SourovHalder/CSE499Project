@extends('layouts.app')
@section('content')

<table class ="table table-stripped">
<thead>
<tr>

<th scope="col">#</th>
<th scope="col">medicineName</th>
<th scope="col">medicinePrice</th>
<th scope="col">add Or Delete</th>
<th
</tr>
</thead>
<tbody>
@foreach($productDetails as $product)</th>
<tr>
<th scope="row">{{$product->id}}</th>
<td>{{$product->medicineName}}</td>
<td>{{$product->medicinePrice}}TK</td>
<div>
@if(Session::has('success_message'))
                            <div class="alert alert-danger" role="alert">
                              {{Session::get('success_message')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endif

<form action="{{url('/cart')}}" method="post" class="form-horizontal qtyFrm">
					@csrf
					<input type="hidden" name="medicineId" value="{{ $product['id'] }}">

						<div class="control-group">
							<h4>{{$product['medicinePrice']}} Tk</h4>
								<input name="quantity" type="number" class="span1" placeholder="Qty." required="" value="1"/>
								<button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart </button>
							</div>
						</div>
					</form>


				</div>
</tr>
@endforeach
</table>
@endsection