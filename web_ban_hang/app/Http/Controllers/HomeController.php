<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('pages.trangchu',compact('products'));
    }
    public function detail($slug){
        $product = Product::where('slug', $slug)->first();
        return view('pages.ctsp', compact('product'));
    }

   
}
