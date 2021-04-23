<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class CartController extends Controller
{
    public function saveCart(Request $request){
    	$quantity = $request->qty;
    	$productID = $request->product_id;
    	$product_info = DB::table('product')->where('product_id', $productID)->first();
    	$data['id'] = $product_info->product_id;
    	$data['name'] = $product_info->product_name;
    	$data['price'] = $product_info->product_price;
    	$data['options']['image'] = $product_info->product_image1;
    	$data['qty'] = $quantity;
    	$data['weight'] = $quantity;
    	Cart::add($data);
    	return redirect('cart');
    }
      public function cart(){
      	$brand = DB::table('brand')->orderBy('brand_id','desc')->get();

    	return view('pages.cart.cart')->with('brand', $brand);
    }
    public function deleteCart($id){
    	Cart::update($id,0);
    	return redirect('cart');
    }
    public function updateCart(Request $request){
    	$rowId = $request->input('rowID'); 
    	$qty = $request->input('qty');
    	Cart::update($rowId,$qty);
    	return redirect('cart');
    }
}
