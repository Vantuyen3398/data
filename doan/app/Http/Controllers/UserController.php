<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class UserController extends Controller
{
	public function login(){
		if(Session::get('user_id')==NULL){
			return view('pages.login');
		}
		else{
			return redirect('checkout');
		}
	}
	public function signin(){
		return view('pages.signin');
	}
	public function saveUser(Request $request){
		$data = array();
		$data['user_name'] = $request->input('userName');
		$data['user_email'] = $request->input('Email');
		$data['password'] = md5($request->input('Password'));
		$data['user_phone'] = '';
		$data['address']='';
		$user_id = DB::table('users')->insertGetId($data);

		Session::put('user_id', $user_id);
		Session::put('user_name', $data['user_name']);
		return redirect('login');
	}
	public function loginUser(Request $request){
		$email = $request->email;
		$password = md5($request->password);
		$result = DB::table('users')->where('user_email', $email)->where('password', $password)->first();

		if($result){
			Session::put('user_id',$result->id);
			return redirect('checkout')->with('result', $result);
		}
		else{
			Session::put('message','Đăng nhập thất bại');
			return redirect('login')->with('message');
		}
	}
	public function logoutUser(){
		Session::flush();
		return back();
	}
}