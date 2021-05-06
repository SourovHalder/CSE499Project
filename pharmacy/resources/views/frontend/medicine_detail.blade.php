@extends('layouts.app')
@section('content')
		<!-- Header End====================================================================== -->
		<div id="mainBody">
			<div class="container">
				<div class="row">

		<div class="span9">
			<ul class="breadcrumb">
				<li><a href="#">{{$productDetails['medicineName']}}</a> <span class="divider">/</span></li>
				<li class="active">Medicine Details</li>
			</ul>
			<div class="row">
				<div id="gallery" class="span3">
					<a href="#" title="">
                        <?php $medicineImagePath= 'images/medicine_images/'.$productDetails['medicineImage']; ?>
                        @if (!empty($productDetails['medicineImage']) && file_exists($medicineImagePath))
                        <img src="{{asset($medicineImagePath)}}" alt=""/>
                        @else
                        <img src="{{asset('/images/medicine_images/no_image.jpg')}}" alt=""/>
                        @endif
					</a>

				</div>
				<div class="span6">
							@if(Session::has('success_message2'))
                            <div class="alert alert-danger" role="alert">
                              {{Session::get('success_message2')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endif



					<h3>{{$productDetails['medicineName']}} </h3>
					<small>- {{$productDetails['type']}}</small>
					<hr class="soft"/>
					<small>{{$productDetails['stock']}} items in stock</small>

					<form action="{{url('/cart')}}" method="post" class="form-horizontal qtyFrm">
					@csrf
					<input type="hidden" name="medicineId" value="{{ $productDetails['id'] }}">

						<div class="control-group">
							<h4>{{$productDetails['medicinePrice']}} Tk</h4>
								<input name="quantity" type="number" class="span1" placeholder="Qty." required="" value="1"/>
								<button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart </button>
							</div>
						</div>
					</form>


				</div>

				<div class="span9">
					<ul id="productDetail" class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="home">
							<table class="table table-bordered">
								<tbody>

									<tr class="techSpecRow"><td class="techSpecTD1">Generic </td><td class="techSpecTD2">{{$productDetails['generic']}}</td></tr>
									<tr class="techSpecRow"><td class="techSpecTD1">Type:</td><td class="techSpecTD2">{{$productDetails['type']}}</td></tr>
									<tr class="techSpecRow"><td class="techSpecTD1">Dose:</td><td class="techSpecTD2">{{$productDetails['dose']}}</td></tr>
									<tr class="techSpecRow"><td class="techSpecTD1">Quantity:</td><td class="techSpecTD2">{{$productDetails['quantity']}} Pcs per Pata</td></tr>
									<tr class="techSpecRow"><td class="techSpecTD1">Description:</td><td class="techSpecTD2">{{$productDetails['description']}}</td></tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div> </div>
</div>

@endsection
