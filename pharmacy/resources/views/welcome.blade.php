@extends('layouts.app')
@section('content')
@if(@isset($page_name)&& $page_name=="welcome")
	

<div id="carouselBlk">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<div class="container">
						<a href="#"><img style="width:100%" src="/images/med6.jpg" alt="special offers"/></a>
						<div class="carousel-caption">
	                        <h3>Get Vitamins at 25% discount</h3>
	                        <p></p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<a href="#"><img style="width:100%" src="/images/med7.jpg" alt=""/></a>
						<div class="carousel-caption">
	                        <h3>get your daily need medicines at 10% discount</h3>
	                        <p>Save Money</p>
						</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#"><img style="width:100%" src="/images/doc5.jpg" alt=""/></a>
					<div class="carousel-caption">
                        <h3>Need Doctors? </h3>
                        <p>Coming soon..</p>
					</div>

				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>
@endif

<br>
<br> 
<br>

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

<div class="jumbotron">
	<h2>We can ORDER for you!</h2>
	<p>		1.Click on 'let us order for you'</p>
	<p>		2.Upload Prescription</p>
	<p>		3.mention for how many days you want your medicine your days segment</p>
	<p>		4.Enter amount</p>
	<p>		5.Click "submit" </p>
	<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>

@endsection