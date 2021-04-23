<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

class Brand extends Controller
{
		//back end
    	public function addbrand(){
    		return view('admin.brand.addbrand');
    	}
    	public function savebrand(Request $request){
    		$data = array();
    		$data['brand_name'] = $request->addbrand;
    		DB::table('brand')->insert($data);
    		Session::put('message', 'Thêm thương hiệu sản phẩm thành công');
    		return redirect('admin/addbrand');
    	}
    	public function allbrand(){
    		$allbrand = array();
    		$allbrand = DB::table('brand')->get();
    		return view('admin/brand/allbrand')->with('brand',$allbrand);
    	}
    	public function editbrand($id){
    		$result = array();
    		$result = DB::table('brand')->where('brand_id',$id)->first();
    		return view('admin/brand/editbrand')->with('editbrand',$result);
    	}
    	public function updatebrand(Request $request, $id){
    		$data = array();
    		$data['brand_name'] = $request->editbrand;
    		DB::table('brand')->where('brand_id',$id)->update($data);
    		Session::put('message', 'Sửa thương hiệu sản phẩm thành công');
    		return redirect('admin/allbrand');
    	}
    	public function deletebrand($id){
    		DB::table('brand')->where('brand_id', $id)->delete();
    		Session::put('message', 'Xóa thương hiệu sản phẩm thành công');
    		return redirect('admin/allbrand');
    	}
}
