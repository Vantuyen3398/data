<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;


class CheckoutController extends Controller
{
	public function checkout(){
		$dataship = DB::table('users')->where('id',Session::get('user_id'))->get();
		return view('pages.checkout.checkout')->with('dataship',$dataship);
	}
	public function saveorder(Request $request){
		$data = array();
		$data['user_name'] = $request->input('userName');
		$data['user_phone'] = $request->input('phone'); ;
		$data['address']= $request->input('address');
		DB::table('users')->update($data);

		$payment = array();
		$payment['payment_method'] = $request->input('payment_option');
		$payment['payment_status'] = 'Đang chờ xử lí';
		$payment_id = DB::table('payment')->insertGetId($payment);

		$order = array();
		$order['customer_id'] = Session::get('user_id');
		$order['shipping_id'] = '1';
		$order['payment_id'] = $payment_id;
		$order['order_total'] = Cart::subtotal();
		$order['order_status'] = 'Đang chờ xử lí';
		$order_id =DB::table('order')->insertGetId($order);

		$content = Cart::content();
		foreach($content as $key => $content){
			$order_detail['order_id'] = $order_id;
			$order_detail['product_id'] = $content->id;
			$order_detail['product_name'] = $content->name;
			$order_detail['product_price'] = $content->price;
			$order_detail['product_sales_quantity'] = $content->qty;
			DB::table('order_details')->insert($order_detail);
		}
		if($payment['payment_method']=='Qua Thẻ ATM'){
			Session::put('message','Qua thẻ atm');
		}
		else{
			Session::put('message','Giao hàng thanh toán');
		}
		Cart::destroy();
		return view('pages.checkout.status');
	}
}
