<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class indexController extends Controller
{
    //action cho trang index
    public function home(){
        //lấy ra các sản phẩm hot
        $query = DB::table('products')->join('category','products.cateID','=','category.cateID')
        ->where('products.hot','=','1')
        ->select('category.cateName','products.productID','products.productName','products.price','products.picture')
        ->take(3)->get();
        return view("homepage")->with(['dshot'=>$query]);
    }
    public function detail($pro,$id){
        $query = DB::table('products')->join('category','products.cateID','=','category.cateID')
        ->where('products.productID','=',$id)
        ->select('category.cateName','products.productID','products.productName','products.price','products.picture')
        ->first();
        return view("detail")->with(['detail'=>$query]);
    }
}
