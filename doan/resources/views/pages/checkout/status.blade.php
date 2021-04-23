@extends('layout')
@section('content')
<h1 style="text-align: center;">
	Bạn đã đặt thành công đơn hàng với phương thức thanh toán: 
	<?php
	if(Session::get('message')) {
		echo Session::get('message');
		Session::put('message','');
	}
	?>
	. Chúng tôi sẽ xử lý đơn hàng của bạn!
</h1>
@endsection