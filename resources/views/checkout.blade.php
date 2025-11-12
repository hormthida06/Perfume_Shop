@extends('layout.master')

@section('pageTitle')
    Shopping Cart
@endsection

@section('content')
<div id="body_Cart">
  <div class="container">
    <h1>Checkout</h1>
    <form id="checkout-form" class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" required />
      </div>
      <div class="col-md-6">
         <label class="form-label">Email</label>
        <input type="email" class="form-control" required />
      </div>
      <div class="col-12">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" required />
      </div>
      <div class="col-md-4">
        <label class="form-label">City</label>
        <input type="text" class="form-control" required />
      </div>
      <div class="col-md-4">
        <label class="form-label">State</label>
        <input type="text" class="form-control" required />
      </div>
      <div class="col-md-4">
        <label class="form-label">ZIP</label>
        <input type="text" class="form-control" required />
      </div>

      <div class="col-12">
        <h4>Order Summary</h4>
        <div id="order-summary"></div>
        <h5>Total: $<span id="order-total">0.00</span></h5>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-lg">Place Order</button>
      </div>
    </form>
  </div>

  <script src="{{ URL::asset('js/script.js')}}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      renderOrderSummary();
    });

    document.getElementById("checkout-form").addEventListener("submit", (e) => {
      e.preventDefault();
      alert("Order placed successfully! (Demo)");
      localStorage.removeItem("cart");
      window.location.href = "/";
    });
  </script>
</div>

@endsection