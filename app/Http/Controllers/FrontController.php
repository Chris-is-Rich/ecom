<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;


class FrontController extends Controller
{
    //
    public function index()
    {
        $shirts=Product::all();
        return view('front.home',compact('shirts'));
    }

    public function shirts()
    {
      $shirts=Product::all();
      $products=Product::all();
      return view('front.shirts',compact('shirts'));
    }
    public function shirt($id)
    {
      $shirts=Product::all();
      $products=Product::find($id);
      return view('front.shirt',compact('shirts'),compact('products'));
    }

    

}
