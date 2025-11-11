@extends('layout.master')

@section('pageTitle')
    Shopping Cart
@endsection

@section('content')

  <div class="container my-5" id="product-detail">
  </div>

  <script src="{{ URL::asset('js/data.js')}}"></script>
  <script src="{{ URL::asset('js/cart.js')}}"></script>
  <script src="{{ URL::asset('js/main.js')}}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const urlParams = new URLSearchParams(window.location.search);
      const id = parseInt(urlParams.get('id'));
      const product = products.find(p => p.id === id);
      if (product) renderDetail(product);
      updateCartCount();
    });
  </script>

@endsection  