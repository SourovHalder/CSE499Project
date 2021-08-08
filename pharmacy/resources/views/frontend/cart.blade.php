{{-- <?php use App\Models\Cart;?> --}}

@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">Medicine</th>
                      <th class="">Medicine Name</th>
                      <th class="">quantity</th> 
                      <th class="">Price</th>
                      <th class="">Actions</th>
                      <th class="">Total Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $total_price=0;?>
                  @foreach($userCartItems as $item)
                  {{-- <?php $attrPrice = Cart::getMedicineAttrPrice($item['medicineId'],$item['quantity']); ?> --}}
                 
                  <tr>
                    <td>
                    <img width="60" src="{{asset ('images/medicine_images/'.$item['medicine']['medicineImage']) }}" alt=""/> </td>
                    <td>{{ $item['medicine']['medicineName']}}</td>
                    <td>{{ $item['medicine']['quantity']}}</td>
                    <td>{{ $item['medicine']['medicinePrice']}}</td>
                 
                  </tr>
                  <?php
               
                  $total_price = $total_price + ($item['medicine']['medicinePrice'] * $item['medicine']['quantity']); ?>
                  @endforeach
                  
                 <tr>
                  <td colspan=" 6 "style="text-align:right">Total Price </td>
                     <td>BDT.{{ $total_price }}</td>
                </table>
                <button type="button" class="btn btn-primary btn-lg pull-right"">Checkout</button>
                
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
 
    
  
  </body>
  </html>
@endsection