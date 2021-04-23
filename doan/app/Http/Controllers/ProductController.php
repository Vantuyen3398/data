<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
class ProductController extends Controller
{
	public function addproduct(){
		$brand = DB::table('brand')->orderBy('brand_id','desc')->get();
		return view('admin.product.addproduct')->with('brand', $brand);
	}
	public function saveproduct(Request $request){
		$data = array();
		$data['product_name'] = $request->input('product_name');
		$data['brand_id'] = $request->input('product_brand');
		$data['product_content'] = $request->input('product_content');
		$data['product_price'] = $request->input('product_price');
		$data['product_image1'] = $request->input('product_img1');
		$data['product_image2'] = $request->input('product_img2');
		$data['product_image3'] = $request->input('product_img3');
		$data['product_image4'] = $request->input('product_img4');
		$data['product_image5'] = $request->input('product_img5');
		$data['product_status'] = $request->input('product_status');
		$get_img1 = $request->file('product_img1');
		$get_img2 = $request->file('product_img2');
		$get_img3 = $request->file('product_img3');
		$get_img4 = $request->file('product_img4');
		$get_img5 = $request->file('product_img5');
		if ($get_img1) {
			$name_img1 = $get_img1->getClientOriginalName();
			$data['product_image1'] = $name_img1;
			$get_img1->move( './public/images/product', $name_img1);
		}
		if ($get_img2) {
			$name_img2 = $get_img2->getClientOriginalName();
			$data['product_image2'] = $name_img2;
			$get_img2->move( './public/images/product', $name_img2);
		}
		if ($get_img3) {
			$name_img3 = $get_img3->getClientOriginalName();
			$data['product_image3'] = $name_img3;
			$get_img3->move( './public/images/product', $name_img3);
		}
		if ($get_img4) {
			$name_img4 = $get_img4->getClientOriginalName();
			$data['product_image4'] = $name_img4;
			$get_img4->move( './public/images/product', $name_img4);
		}
		if ($get_img5) {
			$name_img5 = $get_img5->getClientOriginalName();
			$data['product_image5'] = $name_img5;
			$get_img5->move( './public/images/product', $name_img5);
		}
		DB::table('product')->insert($data);
		Session::put('message','Thêm sản phẩm thành công');
		return redirect('admin/addproduct');
	}
	public function allproducts() {
		$result = DB::table('product')->orderBy('product_id','desc')->get();
		return view('admin/product/allproduct')->with('result', $result);
	}
	public function unactive($id){
		DB::table('product')->where('product_id',$id)->update(['product_status'=>0]);
		Session::put('message','Sản phẩm bị ẩn khỏi trang chủ');
		return redirect('admin/allproducts');
	}
	public function active($id){
		DB::table('product')->where('product_id',$id)->update(['product_status'=>1]);
		Session::put('message','Sản được hiển thị ra trang chủ');
		return redirect('admin/allproducts');
	}
	public function editproduct($id){
		$brand = DB::table('brand')->orderBy('brand_id','desc')->get();
		$result = array();
		$result = DB::table('product')->where('product_id',$id)->get();
		return view('admin.product.editproduct')->with('result',$result)->with('brand',$brand);
	}
	public function updateproduct(Request $request, $id){
		$data = array();
		$data['product_name'] = $request->input('product_name');
		$data['brand_id'] = $request->input('product_brand');
		$data['product_content'] = $request->input('product_content');
		$data['product_price'] = $request->input('product_price');
		$data['product_image1'] = $request->input('product_img1');
		$data['product_image2'] = $request->input('product_img2');
		$data['product_image3'] = $request->input('product_img3');
		$data['product_image4'] = $request->input('product_img4');
		$data['product_image5'] = $request->input('product_img5');
		$get_img1 = $request->file('product_img1');
		$get_img2 = $request->file('product_img2');
		$get_img3 = $request->file('product_img3');
		$get_img4 = $request->file('product_img4');
		$get_img5 = $request->file('product_img5');
		if ($get_img1) {
			$name_img1 = $get_img1->getClientOriginalName();
			$data['product_image1'] = $name_img1;
			$get_img1->move( './public/images/product', $name_img1);
			DB::table('product')->where('product_id',$id)->update(['product_image1',$data['product_image1']]);
		}
		if ($get_img2) {
			$name_img2 = $get_img2->getClientOriginalName();
			$data['product_image2'] = $name_img2;
			$get_img2->move( './public/images/product', $name_img2);
			DB::table('product')->where('product_id',$id)->update(['product_image2'],$data['product_image2']);
		}
		if ($get_img3) {
			$name_img3 = $get_img3->getClientOriginalName();
			$data['product_image3'] = $name_img3;
			$get_img3->move( './public/images/product', $name_img3);
			DB::table('product')->where('product_id',$id)->update(['product_image3'],$data['product_image3']);
		}
		if ($get_img4) {
			$name_img4 = $get_img4->getClientOriginalName();
			$data['product_image4'] = $name_img4;
			$get_img4->move( './public/images/product', $name_img4);
			DB::table('product')->where('product_id',$id)->update(['product_image4'],$data['product_image4']);
		}
		if ($get_img5) {
			$name_img5 = $get_img5->getClientOriginalName();
			$data['product_image5'] = $name_img5;
			$get_img5->move( './public/images/product', $name_img5);
			DB::table('product')->where('product_id',$id)->update(['product_image5'],$data['product_image5']);
		}
		DB::table('product')->where('product_id',$id)->update($data);
		Session::put('message','Cập nhật sản phẩm thành công');
		return redirect('admin/allproducts');
	}
	public function deleteproduct($id){
		DB::table('product')->where('product_id',$id)->delete();
		Session::put('message','Xóa sản phẩm thành công');
		return redirect('admin/allproducts');
	}
	////backend
	public function brandproduct($id){
		$result = DB::table('product')->where('brand_id', $id)->get();
		$name = DB::table('brand')->where('brand_id', $id)->get();
		$brand = DB::table('brand')->orderBy('brand_id','desc')->get();
		return view('pages.product.productbrand')->with('result', $result)->with('name', $name)->with('brand', $brand);
	}
	public function productdetail($id){
		$result = DB::table('product')->where('product_id',$id)->get();
		$brand = DB::table('brand')->orderBy('brand_id','desc')->get();
		return view('pages.product.product')->with('result', $result)->with('brand', $brand);
	}
}	