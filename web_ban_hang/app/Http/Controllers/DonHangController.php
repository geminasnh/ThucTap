<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;  // Nếu bạn có model Product

class DonHangController extends Controller
{
    public function create(Request $request)
    {
        // Nếu sản phẩm được gửi qua query string hoặc session
        $selectedProductIds = session('selected_products', []);
        if ($request->has('products')) {
            $selectedProductIds = explode(',', $request->input('products'));
        }

        // Lấy thông tin các sản phẩm đã chọn từ DB
        $products = Product::whereIn('id', $selectedProductIds)->get();

        // Trả về view tạo đơn hàng, truyền thông tin các sản phẩm
        return view('donhangs.create', compact('products'));
    }
    public function store(Request $request)
    {
        // Lấy thông tin các sản phẩm đã chọn và số lượng
        $productQuantities = $request->input('quantity', []);

        // Tạo đơn hàng mới
        $donHang = Order::create([
            'user_id' => auth()->id(), // Nếu bạn có chức năng đăng nhập
            'total_price' => 0, // Tổng giá sẽ tính sau
            // Các thông tin khác như địa chỉ giao hàng, phương thức thanh toán...
        ]);

        // Tính tổng giá trị đơn hàng và lưu chi tiết đơn hàng
        $totalPrice = 0;
        foreach ($productQuantities as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $totalPrice += $product->price * $quantity;

                // Lưu chi tiết đơn hàng
                DonHangChiTiet::create([
                    'don_hang_id' => $donHang->id,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'price' => $product->price,
                ]);
            }
        }

        // Cập nhật tổng giá trị đơn hàng
        $donHang->update(['total_price' => $totalPrice]);

        // Chuyển đến trang đơn hàng vừa tạo
        return redirect()->route('donhangs.show', $donHang->id)->with('success', 'Đơn hàng đã được tạo thành công!');
    }
}
