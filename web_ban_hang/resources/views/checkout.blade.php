@extends('layouts.index')

@section('content')
    <div class="container">
        <h2>Thông tin thanh toán</h2>

        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <h4>Chi tiết đơn hàng</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng giá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($selectedItems as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ number_format($item->grand_total) }} VND</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mb-3">
                <label for="address_id" class="form-label">Địa chỉ giao hàng</label>
                <select name="address_id" class="form-control" required>
                    @foreach(Auth::user()->addresses as $address)
                        <option value="{{ $address->id }}">{{ $address->address }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="payment_method" class="form-label">Phương thức thanh toán</label>
                <select name="payment_method" class="form-control" required>
                    <option value="cash_on_delivery">Thanh toán khi nhận hàng</option>
                    <option value="bank_transfer">Chuyển khoản ngân hàng</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('client.carts.giohang') }}" class="btn btn-secondary">Quay lại giỏ hàng</a>
                <button type="submit" class="btn btn-success">Thanh toán</button>
            </div>
        </form>
    </div>
@endsection
