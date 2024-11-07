@extends('layouts.index')

@section('content')


    <div class="product-detail">
      @foreach($products as $product)
        <div class="product-images">
            <img src="{{ asset('storage/' . $product->thumb_image) }}" alt="{{ $product->name }}" />
        </div>

        <div class="product-info">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>

            <div class="product-price">
                <span class="price">{{ number_format($product->price, 2) }} VND</span>
            </div>

            <div class="product-actions">
                <!-- Thêm vào giỏ hàng -->
                <form action="{{ route('client.carts.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="number" name="quantity" value="1" min="1" class="quantity-input">
                    <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection



