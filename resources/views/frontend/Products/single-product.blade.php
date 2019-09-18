@extends('frontend.layouts.app')

@section('content')
<style>
	#inner-banner { 
		background:url({{url('/frontend/images')}}/inner-bg1.jpg) no-repeat center 0 !important; 
	}
	#inner-banner .overlay {
	    background: rgba(0, 0, 0, 0.41) !important;
	}
</style>
<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>Product</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="{{url('/')}}">Home</a> / Shop</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec" class="single_product">
	<div class="container">
		<div class="row text-left" style="margin-top:-30px;">
			<div class="act-box clearfix">
				<div class="col-md-6">
					<div class="image"><img src="{{url('/')}}/{{$product->photo}}" /></div>
				</div>
				<div class="col-md-6">
					<div class="act-pad">
						<h4>{{$product->product_name}}</h4>
						<div class="cus_product_desc">{!! $product->product_description !!}</div>
						<div class="price">{{$product->price}} <i class="fa fa-inr" aria-hidden="true"></i> </div>
						<a href="activities.html" class="btn1">Add to Cart</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</section>

@endsection