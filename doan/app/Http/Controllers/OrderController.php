<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
   	public function order(){
   		$all_order = DB::table('order')->join('users','order.customer_id','=','users.id')->select('order.*','users.user_name')->get();
   		$manager = view('admin.order.order')->with('all_order',$all_order);
   		return view('admin.layout')->with('admin.order.order',$manager);
   	}
   	// public function updateorder($id){
   	// 	$all_order_id = DB::table('order')->join('users','order.customer_id','=','users.id')->join('order_details','order_details.order_id','=','order.order_id')->select('order.*','users.*','order_details.*')->get();
   	// 	$manager = view('admin.order.vieworder')->with('all_order_id',$all_order_id);
   	// 	return view('admin.layout')->with('admin.order.vieworder',$manager);
   	// }
      public function updateorder($id){
         $all_order_id = DB::table('order')->where('order_id',$id)->join('users','users.id','=','order.customer_id')->get();
         $order_detail = DB::table('order_details')->where('order_id',$id)->get();
         return view('admin.order.vieworder')->with('all',$all_order_id)->with('detail',$order_detail);
      }
      public function update(Request $request,$id){
         $data = array();
         $data['order_status'] = $request->order_status;
         DB::table('order')->where('order_id',$id)->update($data);
      return redirect('admin/order');

      }
      public function deleteorder($id){
         DB::table('order')->where('order_id',$id)->delete();
         return back();
      }
}
