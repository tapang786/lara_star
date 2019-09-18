@extends('frontend.layouts.app')

@section('content')
<?php $num = rand(1,3); ?>
<style>
	#inner-banner { 
		background:url({{url('/frontend/images')}}/inner-bg{{$num}}.jpg) no-repeat center 0 !important; 
	}
	#inner-banner .overlay {
	    background: rgba(0, 0, 0, 0.41) !important;
	}
</style>
<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>Shop</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="{{url('/')}}">Home</a> / Shop</h6></div>
</div>
</div>
</div>
</section>

<section id="pro-sec">
	<div class="container">
		<div class="row text-center" style="margin-top:-30px;">
			@foreach($products as $product)
			<div class="col-sm-6 col-md-3 clearfix top-off">
				
				<div class="post-content cus_single_product">
					<div class="grid-image">
						<img src="{{$product->photo}}">
					</div>
					<h3 class="title">{{$product->product_name}}</h3>
					<hr>
					<div class="cus_product_desc"><?php echo substr(strip_tags($product->product_description), 0, 70); ?> ...</div>
					<p class="price"><b>{{$product->price}} <i class="fa fa-inr" aria-hidden="true"></i> </b></p>
					<a href="{{url('/product')}}/{{$product->slug}}/" title="" >Buy Now</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@endsection