@extends('layouts.app')
@section('content')
<div id="carouselBlk">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<div class="container">
						<a href="#"><img style="width:100%" src="/images/med.jpg" alt="special offers"/></a>
						<div class="carousel-caption">
	                        <h3>Get Vitamins at 25% discount</h3>
	                        <p></p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<a href="#"><img style="width:100%" src="/images/med2.jpg" alt=""/></a>
						<div class="carousel-caption">
	                        <h3>get your daily need medicines at 10% discount</h3>
	                        <p>Save Money</p>
						</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#"><img src="/images/doctor.jpg" alt=""/></a>
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

@endsection