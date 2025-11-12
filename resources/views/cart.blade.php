@extends('layout.master')

@section('pageTitle')
    Shopping Cart
@endsection

@section('content')

<div id="body_Cart">
  <div class="container my-5 pt-5">
    <h2>Shopping Cart</h2>
    <div id="cart-items"></div>
    <div class="text-end mt-4">
      <h4>Total: $<span id="cart-total">0.00</span></h4>
      <a href="/checkout" class="btn btn-success btn-lg">Proceed to Checkout</a>
    </div>
  </div>
</div>  

  <script src="{{ URL::asset('js/cart.js')}}"></script>
  <script src="{{ URL::asset('js/main.js')}}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      renderCart();
      updateCartCount();
    });
  </script>

@endsection