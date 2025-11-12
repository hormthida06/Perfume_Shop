@extends('layout.master')

@section('pageTitle')
    Home Page
@endsection

@section('content')

  <div class="header-tagline">
    <h1>Tagline describing your e-shop</h1>
    <center>
    <div id="slide">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner"  style="border-radius: 20px;">
              <div class="carousel-item active">
              <img src="img/img1.jpg" alt="Slide 1" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
              <img src="img/img2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
              <img src="img/img3.jpg" class="d-block w-100" alt="...">
              </div>
          </div>
        </div>
    </div>
    </center>

    <button class="btn btn-dark mx-2">Shop Sales</button>
    <button class="btn btn-dark mx-2">All Products</button>
  </div>

  <section id="products">
    <div class="container">
      <h2 class="text-center mb-4">Our Products</h2>
      <div class="row">
         <div class="row" id="product-list"></div>
      </div>
    </div>
  </section>

  <script src="{{ URL::asset('js/data.js')}}"></script>
  <script src="{{ URL::asset('js/cart.js')}}"></script>
  <script src="{{ URL::asset('js/main.js')}}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      renderProducts(products);
      updateCartCount();
    });
  </script>  
      

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection