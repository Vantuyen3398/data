@extends('layout')
@section('content')
<section id="content">
	<div class="container">
		<div class="woocommerce">
			<form class="checkout block" action="{{URL::to('saveorder')}}" method="post">
				<div class="row">
					<div class="col-sm-6">
						<div class="woocommerce-shipping-fields box">
							<label class="checkbox checkbox-inline pull-right ship-to-billing-address-checkbox">
								<input type="checkbox" checked>Ship to billing address?
							</label>
							<h4>Thông tin gửi hàng</h4>
							@foreach ($dataship as $value)
							<div class="shipping-address">
								<div class="form-group">
									{!!csrf_field()!!}
									<input class="input-text full-width" value="{{$value->user_name}}" placeholder="Tên khách hàng" type="text" name="userName">
								</div>
								<div class="form-group">
									<input class="input-text full-width" value="{{$value->address}}" placeholder="Địa chỉ" type="text" name="address">
								</div>
								<div class="form-group">
									<input class="input-text full-width" value="{{$value->user_phone}}" placeholder="Số điện thoại" type="text" name="phone">
								</div>
							</div>
							<div class="form-group box">
								<textarea name="notes" value="{{$value->users_notes}}" class="input-text full-width" placeholder="Ghi chú đơn hàng" rows="8"></textarea>
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-sm-6">
						<?php
						$content = Cart::content();
						?>
						<h4>Đơn hàng của bạn</h4>
						<div id="order_review">
							<table class="shop_table box">
								<thead>
									<tr>
										<th class="product-name">Sản phẩm</th>
										<th class="product-total">Đơn giá</th>
									</tr>
								</thead>
								@foreach ($content as $content)
								<tbody>
									<tr class="cart_item">
										<td class="product-name">
											{{$content->name}}<strong class="product-quantity">× {{$content->qty}}</strong>
										</td>
										<td class="product-total">
											<span class="amount">{{number_format($content->price).' '.'VND'}}</span>
										</td>
									</tr>
								</tbody>
								@endforeach
								<tfoot>
									<tr class="shipping">
										<th>Giao hàng</th>
										<td>
											Miễn phí
										</td>
									</tr>
									<tr class="tax">
										<th>Thuế</th>
										<td>
											0
										</td>
									</tr>
									<tr class="order-total">
										<th>Tổng cộng</th>
										<td><span class="amount">{{Cart::subtotal().' '.'VNĐ'}}</span></td>
									</tr>
								</tfoot>
							</table>
							<div id="payment">
								<h4>Chọn hình thức thanh toán</h4>
								<ul class="payment_methods methods box-sm">
									<li class="payment_method_bacs">
										<label class="radio">
											<input id="payment_method_bacs" class="input-radio" name="payment_option" value="Qua Thẻ ATM" data-order_button_text="" type="radio">
											Qua thẻ ngân hàng
										</label>
										<div class="payment_box payment_method_bacs"><p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền đã hết trong tài khoản của chúng tôi.</p>
										</div>
									</li>
									<li class="payment_method_cheque">
										<label class="radio">
											<input id="payment_method_cheque" class="input-radio" checked="checked" name="payment_option" value="Giao hàng thanh toán" data-order_button_text="" type="radio">
											Giao hàng thanh toán
										</label>
										<div class="payment_box payment_method_cheque"><p>Chúng tôi sẽ giao hàng đến địa chỉ của bạn. Bạn cso thể kiểm tra và thanh toán khi nhận được hàng</p>
										</div>
									</li>
								</ul>
								<div class="form-row place-order">
									<noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>
										<button type="submit" class="btn btn-medium style1">Update Totals</button>
									</noscript>
									<button id="place_order" class="btn btn-medium style1 pull-right">Xác nhận</button>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection