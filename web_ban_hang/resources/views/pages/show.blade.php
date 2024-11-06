@extends('layouts.index')

@section('content')
@foreach($products as $product)
<div class="product-detail">
  <h1>{{ $product->name }}</h1>
  <img src="{{ asset('storage/' . $product->thumb_image) }}" alt="{{ $product->name }}" />
  <p>Giá: ${{ number_format($product->price, 2) }}</p>
  <p>Mô tả: {{ $product->description }}</p>
  <p>Danh mục: <a href="{{ route('admin.categories.show', ['slug' => $product->category->slug]) }}">{{ $product->category->name }}</a></p>
  
  <!-- Add to Cart button -->
  <form action="{{ route('client.cart.add', ['id' => $product->id]) }}" method="POST">
      @csrf
      <button type="submit">Thêm vào giỏ hàng</button>
  </form>
  
  <a href="{{ route('pages.trangchu') }}">Quay lại danh sách sản phẩm</a>
</div>
@endforeach
@endsection
