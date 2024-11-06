<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add($id)
    {
        // Logic thêm sản phẩm vào danh sách yêu thích
        // Ví dụ:
        // $product = Product::find($id);
        // auth()->user()->wishlist()->attach($product);

        return back()->with('success', 'Product added to wishlist!');
    }
}
