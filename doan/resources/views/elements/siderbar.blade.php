<div class="sidebar col-sm-4 col-md-3">
    <div class="widget box">
        <h4>Thương Hiệu</h4>
        <ul class="filter-categories panel-group">
            @foreach($brand as $key => $value)
            <li><a href="{{URL::to('brand/'.$value->brand_id)}}">{{$value->brand_name}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="widget box">
        <h4>Sản phẩm bán chạy</h4>
        <ul class="product-list-widget">
            <li>
                <div class="product-image">
                    <a href="#">
                        <img src="http://placehold.it/58x63" alt="">
                    </a>
                </div>
                <div class="product-content">
                    <h6 class="product-title"><a href="#">Everyday Scoop Neck Cami</a></h6>
                    <span class="product-price">$18.99</span>
                    <span class="star-rating" title="4" data-toggle="tooltip">
                        <span data-stars="4"></span>
                    </span>
                </div>
            </li>
            <li>
                <div class="product-image">
                    <a href="#">
                        <img src="http://placehold.it/58x63" alt="">
                    </a>
                </div>
                <div class="product-content">
                    <h6 class="product-title"><a href="#">Easy Draped Cardigan</a></h6>
                    <span class="product-price">$23.58</span>
                    <span class="star-rating" title="4" data-toggle="tooltip">
                        <span data-stars="4"></span>
                    </span>
                </div>
            </li>
            <li>
                <div class="product-image">
                    <a href="#">
                        <img src="http://placehold.it/58x63" alt="">
                    </a>
                </div>
                <div class="product-content">
                    <h6 class="product-title"><a href="#">Mesh-Trimmed Dress</a></h6>
                    <span class="product-price">$76.00</span>
                    <span class="star-rating" title="4" data-toggle="tooltip">
                        <span data-stars="4"></span>
                    </span>
                </div>
            </li>
        </ul>
    </div>
</div>