@extends('layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-4">Giỏ Hàng</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Nút xóa tất cả sản phẩm -->
    <form action="{{ route('carts.destroyAll') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa tất cả sản phẩm không?')">Xóa Tất Cả</button>
    </form>

    <!-- Form cho việc thanh toán các sản phẩm đã chọn -->
    <form action="{{ route('carts.checkout') }}" method="POST" id="checkout-form">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>ID</th>
                    <th>Ảnh Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts as $cart)
                    <tr>
                        <td>
                            <input type="checkbox" name="selected_products[]" value="{{ $cart->id }}" class="product-checkbox">
                        </td>
                        <td>{{ $cart->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $cart->product->image) }}" alt="{{ $cart->product->name }}" style="width: 100px; height: auto;">
                        </td>
                        <td>{{ $cart->product->name }}</td>
                        <td>{{ number_format($cart->product->price, 0) }} VNĐ</td>
                        <td>
                            <div class="quantity-control" style="display: inline-flex; align-items: center;">
                                <button type="button" onclick="decrementQuantity({{ $cart->id }})" class="btn btn-secondary" style="width: 30px;">-</button>
                                <input type="number" name="quantity-{{ $cart->id }}" id="quantity-{{ $cart->id }}" value="{{ $cart->quantity }}" min="1" required class="form-control" style="width: 80px; text-align: center;">
                                <button type="button" onclick="incrementQuantity({{ $cart->id }})" class="btn btn-secondary" style="width: 30px;">+</button>
                            </div>
                        </td>
                        <td id="total-price-{{ $cart->id }}" data-price="{{ $cart->product->price }}">
                            {{ number_format($cart->quantity * $cart->product->price, 0) }} VNĐ
                        </td>
                        <td>
                            <form action="{{ route('carts.destroy', $cart->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <button type="submit" class="btn btn-success">Thanh Toán Các Sản Phẩm Đã Chọn</button>
    </form>
    
    
    
    {{-- <form action="{{ route('carts.checkout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Thanh Toán Các Sản Phẩm Đã Chọn</button>
    </form> --}}
   
</div>

<script>
    // Khi chọn checkbox, cập nhật lại danh sách sản phẩm được chọn
$(document).on('change', '.product-checkbox', function() {
    let selectedProducts = [];
    
    // Lấy tất cả các checkbox được chọn
    $('.product-checkbox:checked').each(function() {
        selectedProducts.push($(this).val());
    });

    // Cập nhật giá trị vào input hidden trong form thanh toán
    $('#checkout-form').find('input[name="selected_products[]"]').remove();  // Xóa các input hidden cũ

    // Thêm các id sản phẩm đã chọn vào input hidden
    selectedProducts.forEach(function(productId) {
        $('#checkout-form').append('<input type="hidden" name="selected_products[]" value="' + productId + '">');
    });
});

    $(document).on('click', '.delete-cart-item', function() {
    var cartItemId = $(this).data('id'); // Lấy ID sản phẩm từ thuộc tính data-id
    $.ajax({
        url: '/carts/' + cartItemId,
        method: 'DELETE',
        data: {
            _token: '{{ csrf_token() }}', // Cung cấp token CSRF
        },
        success: function(response) {
            alert('Sản phẩm đã được xóa');
            location.reload(); // Tải lại trang hoặc làm mới giỏ hàng
        },
        error: function(xhr) {
            alert('Có lỗi xảy ra!');
        }
    });
});

function incrementQuantity(cartId) {
    let quantityInput = document.getElementById(`quantity-${cartId}`);
    quantityInput.stepUp();  // Tăng số lượng
    updateTotalPrice(cartId);  // Cập nhật tổng giá
}

function decrementQuantity(cartId) {
    let quantityInput = document.getElementById(`quantity-${cartId}`);
    if (quantityInput.value > 1) {
        quantityInput.stepDown();  // Giảm số lượng
        updateTotalPrice(cartId);  // Cập nhật tổng giá
    }
}

function updateTotalPrice(cartId) {
    let quantity = document.getElementById(`quantity-${cartId}`).value;
    let productPrice = document.getElementById(`total-price-${cartId}`).getAttribute('data-price');  // Lấy giá sản phẩm

    // Tính toán lại tổng giá dựa trên số lượng
    let totalPrice = quantity * productPrice;
    
    // Cập nhật tổng giá vào ô tương ứng
    document.getElementById(`total-price-${cartId}`).innerText = `${totalPrice.toLocaleString()} VNĐ`;

    // Gửi yêu cầu AJAX để cập nhật số lượng trên server
    fetch(`/carts/${cartId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ quantity: quantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Quantity updated successfully');
        } else {
            console.error('Failed to update quantity');
        }
    })
    .catch(error => console.error('Error:', error));
}
$(document).on('click', '.delete-cart-item', function() {
    var cartItemId = $(this).data('id'); // Lấy ID sản phẩm từ thuộc tính data-id
    $.ajax({
        url: '/carts/' + cartItemId,  // Đảm bảo đây là URL đúng cho việc xóa sản phẩm
        method: 'DELETE',
        data: {
            _token: '{{ csrf_token() }}', // Cung cấp token CSRF
        },
        success: function(response) {
            alert('Sản phẩm đã được xóa');
            location.reload(); // Tải lại trang hoặc làm mới giỏ hàng
        },
        error: function(xhr) {
            alert('Có lỗi xảy ra!');
        }
    });
});



</script>

@endsection
