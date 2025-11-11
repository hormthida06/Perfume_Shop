@extends('layout.master')

@section('pageTitle')
    Shopping Cart
@endsection

@section('content')
  <section id="product-detail" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://i.pinimg.com/1200x/2a/88/97/2a88971484e6dd1de3ac282565f05455.jpg" class="img-fluid" alt="Product Detail">
        </div>
        <div class="col-md-6">
          <h2>Product Name</h2>
          <h2>Nike Shox R4 SE</h2>
        <p>Men's Shoes with Reflective Accents</p>
          <p><strong>Price:</strong> $29.99</p>
          <p><strong>Description:</strong> This is a high-quality product designed to meet your needs.</p>
          <p><strong>Rating:</strong> ★★★★☆ (4.5/5)</p>
           <div class="col-md-5">
        
        <p class="text-success">$155</p>
        <p>Size M 13 / W 14.5</p>

      </div>
          <button class="btn btn-primary">Add to Cart</button>
          
        </div>
      </div>
    </div>
  </section>

  <div class="cart-notification" style="display: none;">
    <span class="text-success">✔ Added to Bag</span>
    <img src="https://i.pinimg.com/1200x/2a/88/97/2a88971484e6dd1de3ac282565f05455.jpg" alt="Product">
    <p>Nike Shox R4 SE<br>Men's Shoes with Reflective Accents<br>$155</p>
    <a href="/pro_list"><button class="btn btn-outline-secondary btn-sm">View Bag (1)</button></a>
    <a href="/checkout"><button class="btn btn-primary btn-sm">Checkout</button></a>
    <button class="btn btn-close" aria-label="Close"></button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelector('.btn-primary').addEventListener('click', function() {
      const cartNotification = document.querySelector('.cart-notification');
      cartNotification.style.display = 'block';
      setTimeout(() => cartNotification.style.display = 'none', 5000);
    });
    document.querySelector('.btn-close').addEventListener('click', function() {
      document.querySelector('.cart-notification').style.display = 'none';
    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  @endsection  