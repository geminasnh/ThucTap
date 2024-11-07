<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Hiển thị danh sách giỏ hàng.
     */
    public function index()
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa, nếu chưa thì sử dụng session
        $userId = auth()->id() ? auth()->id() : session()->getId();
        
        $carts = Cart::where('session_id', $userId)->get(); // Lấy giỏ hàng của người dùng từ session hoặc auth

        return view('client.carts.giohang', compact('carts'));
    }

    /**
     * Thêm sản phẩm vào giỏ hàng.
     */
    public function add(Request $request)
    {
        // Kiểm tra người dùng đã đăng nhập hay chưa
        $userId = auth()->id() ? auth()->id() : session()->getId();

        // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
        $cart = Cart::where('session_id', $userId)
                    ->where('product_id', $request->product_id)
                    ->first();

        if ($cart) {
            // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng lên
            $cart->quantity += $request->quantity;
            $cart->grand_total = $cart->product->price * $cart->quantity;
            $cart->save();
        } else {
            // Nếu chưa có sản phẩm trong giỏ hàng, tạo mới
            $product = Product::findOrFail($request->product_id);

            $cart = new Cart();
            $cart->session_id = $userId;  // Gán session_id (hoặc user_id nếu đăng nhập)
            $cart->product_id = $request->product_id;
            $cart->quantity = $request->quantity;
            $cart->grand_total = $product->price * $request->quantity;
            $cart->save();
        }

        return redirect()->route('client.carts.giohang')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

    /**
     * Cập nhật số lượng sản phẩm trong giỏ hàng.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::findOrFail($id);
        $cart->quantity = $request->quantity;
        $cart->grand_total = $cart->product->price * $cart->quantity;
        $cart->save();

        return redirect()->route('client.carts.giohang')->with('success', 'Giỏ hàng đã được cập nhật.');
    }

    /**
     * Xóa sản phẩm khỏi giỏ hàng.
     */
    public function destroy(string $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('client.carts.giohang')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    /**
     * Xóa tất cả sản phẩm trong giỏ hàng.
     */
    public function destroyAll()
    {
        // Kiểm tra người dùng đã đăng nhập hay chưa
        $userId = auth()->id() ? auth()->id() : session()->getId();

        Cart::where('session_id', $userId)->delete();

        return redirect()->route('client.carts.giohang')->with('success', 'Đã xóa tất cả sản phẩm trong giỏ hàng.');
    }
}
