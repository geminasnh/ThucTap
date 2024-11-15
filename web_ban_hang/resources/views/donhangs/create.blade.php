@extends('layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-4">Tạo Đơn Hàng</h1>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
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
                @foreach($products as $product)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: auto;">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 0) }} VNĐ</td>
                        <td>
                            <input type="number" name="quantity[{{ $product->id }}]" value="1" min="1" class="form-control" style="width: 80px;">
                        </td>
                        <td>{{ number_format($product->price, 0) }} VNĐ</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button type="submit" class="btn btn-success w-100 my-2">Hoàn tất Đơn Hàng</button>
    </form>
</div>
@endsection
