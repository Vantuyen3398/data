@extends('layout')
@section('content')
<section id="content" class="col-sm-8 col-md-9">
	<?php
	$content = Cart::content();
	?>
	<div class="container">
		<div class="woocommerce">
			<form>
				<table class="shop_table cart box-sm">
					<thead>
						<tr>
							<th class="product-remove">&nbsp;</th>
							<th class="product-thumbnail">&nbsp;</th>
							<th class="product-name">Sản phẩm</th>
							<th class="product-price">Giá</th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-subtotal">Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($content as $content)
						<tr class="cart_item">
							<td class="product-remove">
								<a href="{{URL::to('/cart/delete/'.$content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
							<td class="product-thumbnail">
								<a href="#" class="attachment-shop_thumbnail wp-post-image"><img src="{{URL::to('public/images/product/'.$content->options->image)}}" alt=""></a>
							</td>
							<td class="product-name">
								<a href="#">{{$content->name}}</a>
							</td>
							<td class="product-price">
								<span class="amount">{{number_format($content->price).' '.'VND'}}</span>
							</td>
							<td class="product-quantity">
								<form action="{{URL::to('cart/update')}}" method="post">
									{!!csrf_field()!!}
									<input type="text" size="4" class="input-text qty text" title="Số lượng" value="{{$content->qty}}" name="qty">
									<input type="hidden" size="4" class="input-text qty text" title="Qty" value="{{$content->rowId}}" name="rowID">
									<input type="submit" size="4" class="input-text qty text" title="Cập nhật" value="Cập nhật" name="">
								</form>
							</td>
							<td class="product-subtotal">
								<span class="amount"><?php echo number_format($content->price * $content->qty).' '.'VND' ?></span>
							</td>
						</tr>
						@endforeach
						<tr>
							<td class="actions" colspan="6">
								<div class="cart-collaterals row">
									<div class="cart_totals col-sm-offset-7 col-md-offset-8 clearfix box">
										<div class="col-xs-12">
											<h4>Tổng đơn hàng</h4>
											<table>
												<tbody>
													<tr class="cart-subtotal">
														<th>Giá sản phẩm</th>
														<td><span class="amount">{{Cart::subtotal().' '.'VNĐ'}}</span></td>
													</tr>
													<tr class="shipping">
														<th>Giao hàng</th>
														<td>
															Free Shipping
															<input type="hidden" class="shipping_method" value="123123" id="shipping_method_0" data-index="0" name="shipping_method[0]">
														</td>
													</tr>
													<tr class="order-total">
														<th>Tổng đơn hàng</th>
														<td><span class="amount">{{Cart::subtotal().' '.'VNĐ'}}</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<a href="{{URL::to('login')}}" class="btn btn-medium style1">Tiến hành thanh toán</a>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</section>

@endsection