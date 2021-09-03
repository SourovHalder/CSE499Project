@extends('layouts.app')
@section('content')


<div id="mainBody">
	<div class="container">
		<div class="row">
			<!-- Sidebar ================================================== -->

			<!-- Sidebar end=============================================== -->
			<div class="span9">
<h3>Latest Medicines<span class="badge badge-secondary">New</span></h3>
<ul class="thumbnails">
	@foreach ($newMedicines as $medicine)
	<li style="width: 270px; float: left; display: block;">
		<div class="thumbnail">
			<a  href="#">
				<?php $medicineImagePath= 'images/medicine_images/'.$medicine['medicineImage']; ?>
				@if (!empty($medicine['medicineImage']) && file_exists($medicineImagePath))
				<img src="{{asset($medicineImagePath)}}" alt=""/>
				@else
				<img src="images/medicine_images/no_image.jpg" alt=""/>
				@endif
			</a>
			<div class="caption">
				<h5>{{$medicine['medicineName']}}</h5>
				<p>
					{{$medicine['generic']}}
				</p>

				<h4 style="text-align:center"><a class="btn btn-primary" href="/medicine/{{$medicine['id']}}">View</a> <a class="btn btn-primary" href="#">Add to Cart</i></a> <a class="btn btn-info" href="#">{{$medicine['medicinePrice']}} Tk</a></h4>
				
			</div>
		</div>
	</li>
@endforeach
</ul>
			</div>
		</div>
	</div>
</div>


<br>
<br>

<div id="mainBody">
	<div class="container">
		<div class="row">
			<!-- Sidebar ================================================== -->

			<!-- Sidebar end=============================================== -->
			<div class="span9">
<h3>Daily Medicines<span class="badge badge-secondary">GET NOW</span></h3>
<ul class="thumbnails">
	@foreach ($newMedicines2 as $m)
	<li style="width: 270px; float: left; display: block;">
		<div class="thumbnail">
			<a  href="#">
				<?php $medicineImagePath= 'images/medicine_images/'.$m['medicineImage']; ?>
				@if (!empty($m['medicineImage']) && file_exists($medicineImagePath))
				<img src="{{asset($medicineImagePath)}}" alt=""/>
				@else
				<img src="images/medicine_images/no_image.jpg" alt=""/>
				@endif
			</a>
			<div class="caption">
				<h5>{{$m['medicineName']}}</h5>
				<p>
					{{$m['generic']}}
				</p>

				<h4 style="text-align:center"><a class="btn btn-primary" href="/medicine/{{$m['id']}}">View</a> <a class="btn btn-primary" href="#">Add to Cart</i></a> <a class="btn btn-info" href="#">{{$m['medicinePrice']}} Tk</a></h4>
			</div>
		</div>
	</li>
@endforeach
</ul>
			</div>
		</div>
	</div>
</div>

</div>
<div>

<br>
<br>

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
	
				<!-- Sidebar end=============================================== -->
				<div class="span9">
	<h3>COVID-19 Essentials<span class="badge badge-secondary"></span></h3>
	<ul class="thumbnails">
		@foreach ($newMedicines3 as $m)
		<li style="width: 270px; float: left; display: block;">
			<div class="thumbnail">
				<a  href="#">
					<?php $medicineImagePath= 'images/medicine_images/'.$m['medicineImage']; ?>
					@if (!empty($m['medicineImage']) && file_exists($medicineImagePath))
					<img src="{{asset($medicineImagePath)}}" alt=""/>
					@else
					<img src="images/medicine_images/no_image.jpg" alt=""/>
					@endif
				</a>
				<div class="caption">
					<h5>{{$m['medicineName']}}</h5>
					<p>
						{{$m['generic']}}
					</p>
	
					<h4 style="text-align:center"><a class="btn btn-primary" href="/medicine/{{$m['id']}}">View</a> <a class="btn btn-primary" href="#">Add to Cart</i></a> <a class="btn btn-info" href="#">{{$m['medicinePrice']}} Tk</a></h4>
				</div>
			</div>
		</li>
	@endforeach
	</ul>
				</div>
			</div>
		</div>
	</div>
	
	</div>
	<div>

@endsection