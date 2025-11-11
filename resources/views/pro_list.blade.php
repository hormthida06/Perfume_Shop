@extends('layout.master')

@section('pageTitle')
    Shopping Cart
@endsection

@section('content')

    <section id="cart" class="py-5" style="margin: 150px 0;">
    <div class="container">
      <h2 class="text-center mb-4">Your Cart</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Product 1</td>
            <td>$29.99</td>
            <td><input type="number" class="form-control w-50" value="1"></td>
            <td>$29.99</td>
            <td><button class="btn btn-danger btn-sm">Remove</button></td>
          </tr>
        </tbody>
      </table>
      <div class="text-end">
        <h4>Total: $29.99</h4>
        <a href="/checkout" class="btn btn-success">Proceed to Checkout</a>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection  