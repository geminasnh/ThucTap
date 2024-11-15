<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <script>
        function updateTotal() {
            let total = 0;

            // Duyệt qua tất cả các sản phẩm trong giỏ hàng
            document.querySelectorAll('.cart-item').forEach(item => {
                const price = parseFloat(item.querySelector('.price').dataset.price); // Lấy giá trị giá đúng
                const quantity = parseInt(item.querySelector('.quantity').value); // Lấy giá trị số lượng đúng
                const isChecked = item.querySelector('.select-product').checked; // Kiểm tra sản phẩm có được chọn hay không

                // Nếu sản phẩm được chọn, tính tổng tiền
                if (isChecked) {
                    const itemTotal = price * quantity;
                    item.querySelector('.total').textContent = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(itemTotal);
                    total += itemTotal;
                } else {
                    item.querySelector('.total').textContent = '0 VND'; // Nếu không chọn, không tính tiền
                }
            });

            // Cập nhật tổng tiền cho giỏ hàng
            document.querySelector('#grand-total').textContent = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(total);
        }

        window.onload = function() {
            updateTotal(); // Cập nhật tổng tiền khi trang được tải
        };
    </script>
</head>
<body>
    <h1>Giỏ hàng của bạn</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($carts->isEmpty())
        <p>Giỏ hàng của bạn hiện tại trống.</p>
        <a href="{{ route('pages.sanpham') }}">Quay lại mua sắm</a>
    @else
        <form action="{{ route('checkout.page') }}" method="GET">
            <table border="1">
                <thead>
                    <tr>
                        <th>Chọn</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carts as $cart)
                        <tr class="cart-item">
                            <td><input type="checkbox" class="select-product" onchange="updateTotal()" checked></td>
                            <td>{{ $cart->product->name }}</td>
                            <td>
                                <span class="price" data-price="{{ $cart->product->price }}">
                                    {{ number_format($cart->product->price, 0, ',', '.') }} VND
                                </span>
                            </td>
                            <td>
                                <input type="number" class="quantity" name="quantity[{{ $cart->id }}]" value="{{ $cart->quantity }}" min="1" required onchange="updateTotal()">
                            </td>
                            <td class="total">
                                {{ number_format($cart->grand_total, 0, ',', '.') }} VND
                            </td>
                            <td>
                                <!-- Form xóa sản phẩm khỏi giỏ hàng -->
                                <form action="{{ route('cart.remove', $cart->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                <h3>Tổng tiền: <span id="grand-total">{{ number_format($carts->sum('grand_total'), 0, ',', '.') }} VND</span></h3>
            </div>

            <div>
                <button type="submit">Đi đến Thanh toán</button>
            </div>
        </form>
    @endif
</body>
</html> 
