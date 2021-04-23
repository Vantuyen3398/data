<header id="header">
    <div class="container">
        <div class="header-inner">
            <div class="branding">
                <h1 class="logo">
                    <a href="{{URL::to('/')}}"><img src="{{URL::to('public/images/logo@2x.png')}}" alt=""><span>MOBILE.VN</span></a>
                </h1>
            </div>
            <nav id="nav">
                <ul class="header-top-nav">
                    <li class="mini-cart menu-item-has-children">
                        <a href="#"><i class="fa fa-shopping-cart has-circle"></i></a>
                        <div class="sub-nav cart-content">
                            <ul class="product-list product-list-widget">
                                <li>
                                    <?php
                                    $content = Cart::content();
                                    ?>
                                    @foreach($content as $content)
                                    <div class="product-image">
                                        <a href="#"><img alt="" src="{{URL::to('public/images/product/'.$content->options->image)}}"></a>
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-title">{{$content->name}}</a>
                                        <span class="product-price">{{number_format($content->price).' '.'VND'}}</span>
                                    </div>
                                    @endforeach
                                </li>
                            </ul>
                            <hr>
                            <div class="st-table">
                                <div class="cart-action">
                                    <a href="woocommerce-shopping-cart.html" class="btn-view-cart btn btn-sm style4"><i class="fa fa-shopping-cart"></i>View Cart</a>
                                </div>
                                <div class="cart-price">Total: <span class="total-price">{{Cart::subtotal().' '.'VNĐ'}}</span></div>
                            </div>
                        </div>
                    </li>
                    <li class="mini-search">
                        <a href="#"><i class="fa fa-search has-circle"></i></a>
                        <div class="main-nav-search-form">
                            <form method="get" role="search">
                                <div class="search-box">
                                    <input type="text" id="s" name="s" value="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="visible-mobile">
                        <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                    </li>
                </ul>
                <ul id="main-nav" class="hidden-mobile">

                    <li class="menu-item-has-children">
                     <a href="{{URL::to('/')}}">Trang chủ</a>
                 </li>
                 <li class="menu-item-has-children mega-menu-item mega-column-4">
                    <a href="#">Thanh toán</a>
                </li>
                <?php
                $user_id = Session::get('user_id');
                if($user_id!=NULL){
                    ?>
                    <li class="menu-item-has-children mega-menu-item mega-column-6">
                        <a href="{{URL::to('logout')}}">đăng xuất</a>
                    </li>
                    <?php
                }else{
                    ?>
                    <li class="menu-item-has-children">
                        <a href="{{URL::to('login')}}">Đăng nhập</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</div>
</header>

<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title">Cửa Hàng Điện Thoại MOBILE.VN</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li><a href="#">Chính sách bảo hành</a></li>
    </ul>
</div>