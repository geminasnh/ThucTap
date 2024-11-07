<form action="{{ route('client.cart.add') }}" method="POST">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  <input type="number" name="quantity" value="1" min="1">
  <button type="submit">Thêm vào giỏ hàng</button>
</form>