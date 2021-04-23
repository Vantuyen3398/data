@extends('layout')
@section('content')
<section id="content" class="col-sm-8 col-md-9">
	@foreach($result as $key => $value)
	<div class="container">
		<div class="product type-product">
			<div class="row single-product-details">
				<div class="product-images col-sm-6 box-lg">
					<div id="sync1" class="owl-carousel images">
						<div class="item easyzoom easyzoom--overlay">
							 <a href="{{URL::to('public/images/product/'.$value->product_image1)}}"><img src="{{URL::to('public/images/product/'.$value->product_image1)}}" alt=""></a>
						</div>
						<div class="item easyzoom easyzoom--overlay">
							 <a href="{{URL::to('public/images/product/'.$value->product_image1)}}"><img src="{{URL::to('public/images/product/'.$value->product_image2)}}" alt=""></a>
						</div>
						<div class="item easyzoom easyzoom--overlay">
							 <a href="{{URL::to('public/images/product/'.$value->product_image1)}}"><img src="{{URL::to('public/images/product/'.$value->product_image3)}}" alt=""></a>
						</div>
						<div class="item easyzoom easyzoom--overlay">
							 <a href="{{URL::to('public/images/product/'.$value->product_image1)}}"><img src="{{URL::to('public/images/product/'.$value->product_image4)}}" alt=""></a>
						</div>
						<div class="item easyzoom easyzoom--overlay">
							 <a href="{{URL::to('public/images/product/'.$value->product_image1)}}"><img src="{{URL::to('public/images/product/'.$value->product_image5)}}" alt=""></a>
						</div>
					</div>
					<div id="sync2" class="owl-carousel post-slider style3 thumbnails" data-items="4">
						<div class="item">
							<a href="#"><img src="{{URL::to('public/images/product/'.$value->product_image1)}}" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="{{URL::to('public/images/product/'.$value->product_image2)}}" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="{{URL::to('public/images/product/'.$value->product_image3)}}" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="{{URL::to('public/images/product/'.$value->product_image4)}}" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="{{URL::to('public/images/product/'.$value->product_image5)}}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="summary entry-summary col-sm-6 box-lg">
					<div class="clearfix">
						<h2 class="product-title entry-title">{{$value->product_name}}</h2>
						<span class="star-rating" title="4" data-toggle="tooltip">
							<span data-stars="4"></span>
						</span>
					</div>
					<span class="product-price box">{{number_format($value->product_price).' '.'VNĐ'}}</span>
					<p>{{$value->product_content}}</p>
					<dl class="product-meta">
						<dt class="sku-wrapper">Mã sản phẩm:</dt>
						<dd>{{$value->product_id}}</dd>
						<dt class="product-category">Tình trạng:</dt>
						<dd>Mới 100%</dd>
						<dt class="taggs">Tags:</dt>
						<dd>Điện thoại</dd>
					</dl>
					<form class="variations-form cart" action="{{URL::to('savecart')}}" method="post">
						 {!!csrf_field()!!}
						<div class="variations clearfix box">
							<div class="col-xs-12 col-lg-6">
								<div class="st-td">
									<label>Chọn màu</label>
								</div>
								<div class="st-td">
									<select class="selector">
										<option value="">Pick Color</option>
										<option value="green">Green</option>
										<option value="pink">Pink</option>
									</select>
								</div>
							</div>
						</div>
						<div class="single-variation-wrap">
							<div class="qty-wrap">
								<label>Số lượng</label>
								<input type="text" class="input-text" value="1" name="qty">
								<input type="hidden"  class="input-text" value="{{$value->product_id}}" name="product_id">
							</div>
							<div class="variation-action">
								<button type="submit" class="btn btn-medium style1"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
								<a href="#" class="btn btn-medium style2"><i class="fa fa-heart"></i>Yêu thích</a>
							</div>
						</div>
					</form>
					<div class="social-wrap">
						<label>Share with friends</label>
						<div class="social-icons">
							<a href="#" class="social-icon"><i class="fa fa-twitter has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
							<a href="#" class="social-icon"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
							<a href="#" class="social-icon"><i class="fa fa-google-plus has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
							<a href="#" class="social-icon"><i class="fa fa-linkedin has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
							<a href="#" class="social-icon"><i class="fa fa-skype has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
							<a href="#" class="social-icon"><i class="fa fa-dribbble has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
							<a href="#" class="social-icon"><i class="fa fa-tumblr has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</section>
@endsection