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
    $userId = auth()->id() ? auth()->id() : session()->getId();

    // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
    $cart = Cart::where('session_id', $userId)
                ->where('product_id', $request->product_id)
                ->first();

    $product = Product::findOrFail($request->product_id); // Lấy sản phẩm từ DB

    if ($cart) {
        // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng lên
        $cart->quantity += $request->quantity;
        $cart->grand_total = $product->price * $cart->quantity; // Cập nhật tổng giá trị
        $cart->save();
    } else {
        // Nếu chưa có sản phẩm trong giỏ hàng, tạo mới
        $cart = new Cart();
        $cart->session_id = $userId;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->grand_total = $product->price * $request->quantity; // Tính tổng giá trị ngay khi thêm
        $cart->save();
    }

    return redirect()->route('client.carts.giohang')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
}


    /**
     * Cập nhật số lượng sản phẩm trong giỏ hàng.
     */
    public function update(Request $request, $id)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Tìm sản phẩm trong giỏ hàng
        $cart = Cart::findOrFail($id);
        $product = $cart->product;

        // Cập nhật số lượng và tính lại tổng giá
        $cart->quantity = $request->quantity;
        $cart->grand_total = $product->price * $cart->quantity;  // Tính lại tổng giá

        // Lưu thay đổi
        $cart->save();

        // Trả về phản hồi JSON
        return response()->json(['success' => true]);
    }
    


    /**
     * Xóa sản phẩm khỏi giỏ hàng.
     */
   // Controller CartController
public function destroy($id)
{
    // Xử lý xóa sản phẩm từ giỏ hàng
    Cart::destroy($id);  // Hoặc tùy theo cách bạn xóa sản phẩm trong giỏ hàng
    return redirect()->route('client.carts.giohang')->with('success', 'Sản phẩm đã được xóa.');
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
// Controller CartController
public function checkout(Request $request)
{
    $selectedProducts = $request->input('selected_products');
    
    // Kiểm tra nếu không có sản phẩm nào được chọn
    if (!$selectedProducts) {
        return redirect()->route('client.carts.giohang')->with('error', 'Vui lòng chọn ít nhất một sản phẩm để thanh toán.');
    }

    // Tiến hành xử lý thanh toán với các sản phẩm đã chọn
    // ...
}

    
    
    
    


}
