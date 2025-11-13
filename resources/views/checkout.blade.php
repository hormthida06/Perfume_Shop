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
        <button type="submit" id="placeOrderBtn" class="btn btn-primary btn-lg">Place Order</button>
      </div>
    </form>
  </div>

  <!-- LOADING OVERLAY (QR + SPINNER) -->
  <div id="loadingOverlay" class="loading-overlay">
    <div class="overlay-content text-center text-white position-relative">
      <button id="closeOverlayBtn" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-3">✕</button>
      <div class="spinner mb-3"></div>
      <img src="{{ asset('img/khsqr.png') }}" alt="Scan to Pay" class="qr-image">
      <p class="mt-3">Scan QR code to complete payment</p>
    </div>
  </div>
</div>

<script src="{{ URL::asset('js/script.js') }}"></script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    renderOrderSummary();   
  });

  const form = document.getElementById("checkout-form");
  const overlay = document.getElementById("loadingOverlay");
  const btn = document.getElementById("placeOrderBtn");
  const closeBtn = document.getElementById("closeOverlayBtn");


  form.addEventListener("submit", (e) => {
    e.preventDefault();   

    btn.disabled = true;
    btn.innerHTML = "Processing...";

    overlay.classList.add("show");

    setTimeout(() => {
      window.location.href = "/checkout";   
    }, 3000);
  });

  closeBtn.addEventListener("click", () => {
    overlay.classList.remove("show");
    btn.disabled = false;
    btn.innerHTML = "Place Order";
  });
</script>

@endsection
