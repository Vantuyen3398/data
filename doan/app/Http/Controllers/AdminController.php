<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.login');
    }
    public function adminLogin(Request $request){
    	$email = $request->email;
    	$password = md5($request->password);
    	$result = DB::table('admin')->where('email',$email)->where('password',$password)->first();
		 if($result){
			 Session::put('name',$result->name);
			return redirect('/admin1');
		 }else{
			 Session::put('message','mat khau hoac email khong dung, nhap lai nhe');
			 return redirect('/admin');
		 }
    }
}
