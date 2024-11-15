@extends('layouts.index')

@section('content')
<div class="checkout-container">
    <h2>Thanh toán</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="checkout-table">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($selectedItems as $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $item->product->image_path) }}" alt="{{ $item->product->name }}" width="50">
                    </td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->grand_total, 2) }} VNĐ</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tổng thanh toán -->
    <div class="checkout-summary">
        <h3>Tổng cộng: {{ number_format($selectedItems->sum('grand_total'), 2) }} VNĐ</h3>
    </div>

    <!-- Form thanh toán -->
    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="address_id">Địa chỉ giao hàng:</label>
            <select name="address_id" id="address_id" class="form-control" required>
                <!-- Giả sử bạn đã có địa chỉ trong cơ sở dữ liệu -->
                @foreach(Auth::user()->addresses as $address)
                    <option value="{{ $address->id }}">{{ $address->address }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="payment_method">Phương thức thanh toán:</label>
            <select name="payment_method" id="payment_method" class="form-control" required>
                <option value="COD">Thanh toán khi nhận hàng</option>
                <option value="VNPay">Thanh toán qua VNPay</option>
            </select>
        </div>
        
        <input type="hidden" name="selected_items[]" value="{{ implode(',', $selectedItems->pluck('id')->toArray()) }}">

        <button type="submit" class="btn btn-success">Thanh toán ngay</button>
    </form>
</div>
@endsection
