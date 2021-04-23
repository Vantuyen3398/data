<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
    	$brand = DB::table('brand')->orderBy('brand_id','desc')->get();
    	$result = DB::table('product')->where('product_status','1')->orderBy('product_id','desc')->paginate(12);
    	return view('home')->with('brand', $brand)->with('product',$result);
    }
}
