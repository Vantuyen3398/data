@extends("welcome")
@section("content")
<div id="main" class="col-sm-8 col-md-9">
	@foreach($name as $key => $value)
    	<h3>Điện thoại {{$value->brand_name}}</h3>
    	@endforeach
    <div class="view-switcher">
        <a href="woocommerce-category-grid.html" class="btn btn-sm style4 toggle-grid active"><i class="fa fa-th-large"></i>Grid</a>
        <a href="woocommerce-category-list.html" class="btn btn-sm style4 toggle-list"><i class="fa fa-bars"></i>List</a>
    </div>
    <form method="get" class="woocommerce-ordering box">
        <select class="orderby selector" name="orderby">
            <option value="popularity">Sort by popularity</option>
            <option value="rating">Sort by average rating</option>
            <option selected="selected" value="date">Sort by newness</option>
            <option value="price">Sort by price: low to high</option>
            <option value="price-desc">Sort by price: high to low</option>
        </select>
    </form>
    <div class="products row add-clearfix">
        @foreach($result as $key => $value)
        <div class="product col-sms-6 col-sm-6 col-lg-4 box">
            <a href="{{URL::to('product/'.$value->product_id)}}" class="product-image">
                <div class="first-img">
                    <img src="{{URL::to('public/images/product/'.$value->product_image1)}}" alt=""> 
                    {{-- 540x610 --}}
                </div>
                <div class="back-img">
                    <img src="{{URL::to('public/images/product/'.$value->product_image2)}}" alt="">
                     {{-- 540x610 --}}
                </div>
            </a>
            <div class="product-content">
                <h5 class="product-title"><a href="{{URL::to('product/'.$value->product_id)}}">{{$value->product_name}}</a></h5>
                <span class="product-price"><span class="currency-symbol"></span>{{number_format($value->product_price).' '.'VNĐ'}}</span>
                <span data-toggle="tooltip" title="4" class="star-rating">
                    <span data-stars="4"></span>
                </span>
            </div>
            <div class="product-action">
                <a href="#" class="btn btn-add-to-cart"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                <a href="#" class="btn btn-add-to-wishlist"><i class="fa fa-heart"></i></a>
                <a href="ajax/woocommerce-product-quickview.html" class="btn btn-quick-view"><i class="fa fa-search"></i></a>
                <a href="#" class="btn btn-compare"><i class="fa fa-star-half-o"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="post-pagination">
        <a href="#" class="nav-prev disabled" onclick="return false;"></a>
        <div class="page-links">
            <span class="active">1</span>
            <a href="#" data-page-num="2">2</a>
            <a href="#" data-page-num="3">3</a>
        </div>
        <a href="#" class="nav-next" data-page-num="2"></a>
    </div>
</div>
@endsection