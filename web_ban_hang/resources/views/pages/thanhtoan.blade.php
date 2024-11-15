@extends('layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-4">Thanh Toán</h1>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h3>Thông Tin Sản Phẩm</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ảnh Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($selectedProducts as $product)
                <tr>
                    <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px;"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 0) }} VNĐ</td>
                    <td>{{ $request->input('quantity-' . $product->id, 1) }}</td>
                    <td>{{ number_format($product->price * $request->input('quantity-' . $product->id, 1), 0) }} VNĐ</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Tổng Tiền: {{ number_format($totalAmount, 0) }} VNĐ</h3>

    <!-- Form thanh toán hoặc các bước tiếp theo -->
    <form action="{{ route('payment.vnpay.create') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Thanh Toán qua VNPay</button>
    </form>
</div>
@endsection
