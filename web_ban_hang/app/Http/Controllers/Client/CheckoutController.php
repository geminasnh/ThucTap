<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // Hiển thị trang thanh toán với các sản phẩm đã chọn
    public function showCheckoutPage(Request $request)
    {
        // Lấy các sản phẩm đã chọn từ giỏ hàng
        $selectedItems = Cart::with('product')
            ->whereIn('id', $request->selected_items)
            ->where('user_id', Auth::id())
            ->get();

        // Kiểm tra nếu không có sản phẩm nào được chọn
        if ($selectedItems->isEmpty()) {
            return redirect()->route('carts.index')->with('error', 'Bạn chưa chọn sản phẩm để thanh toán.');
        }

        return view('checkout.index', [
            'selectedItems' => $selectedItems
        ]);
    }

    // Xử lý thanh toán
  // Xử lý thanh toán
  public function store(Request $request)
  {
      $request->validate([
          'selected_items' => 'required|array',
          'address_id' => 'required|exists:addresses,id',
          'payment_method' => 'required|string',
      ]);
  
      $selectedCartIds = $request->selected_items;
      $carts = Cart::whereIn('id', $selectedCartIds)->where('user_id', Auth::id())->get();
      $grandTotal = $carts->sum('grand_total');
      $productQty = $carts->sum('quantity');
  
      // Tạo đơn hàng mới
      $order = Order::create([
          'invoice_id' => uniqid(),
          'user_id' => Auth::id(),
          'address_id' => $request->address_id,
          'grand_total' => $grandTotal,
          'product_qty' => $productQty,
          'payment_method' => $request->payment_method,
          'order_status' => 'pending',
      ]);
  
      // Tạo order items cho từng sản phẩm trong giỏ hàng
      foreach ($carts as $cart) {
          OrderItem::create([
              'order_id' => $order->id,
              'product_id' => $cart->product_id,
              'unit_price' => $cart->grand_total / $cart->quantity,
              'qty' => $cart->quantity,
          ]);
      }
  
      // Xóa các sản phẩm đã thanh toán khỏi giỏ hàng
      Cart::whereIn('id', $selectedCartIds)->delete();
  
      return redirect()->route('checkout.success', ['order_id' => $order->id]);
  }

// Trang thông báo sau khi thanh toán thành công
public function success(Request $request)
{
    $order = Order::find($request->order_id);
    return view('checkout.success', compact('order'));
}
}

