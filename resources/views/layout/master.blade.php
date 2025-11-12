<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('pageTitle')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="{{ URL::asset('js/script.js')}}"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/login.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/cart.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .header-tagline { padding: 50px 0; text-align: center; }
    .product-card {overflow: hidden; height: auto; background: #f0f0f0; margin: 10px; display: flex; align-items: center; justify-content: center; color: #ccc; }
    .pro-box{width: 100%; height: 350px; overflow: hidden;}
    .pro-box img{width: 100%; height: 100%;}
    .promo-box { background: #000; color: #fff; text-align: center; padding: 20px; }
    .new-arrivals, .brand-products { margin: 20px 0;}
    a{text-decoration: none;}
    .cart-badge { position:relative; display:inline-block; }
    .cart-badge .badge {
      position:absolute; top:-8px; right:-8px;
      font-size:.65rem; min-width:18px; height:18px; line-height:18px;
      border-radius:50%; background:#dc3545; color:#fff; text-align:center;
    }
  </style>
  @yield('headerBlock')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="z-index: 1030;">
    <div class="container-fluid">

      <div class="logo">
        <a class="navbar-brand" href="/">
          <img src="img/logo.png" alt="Your Company" style="border-radius: 50%;">
        </a>
      </div>
       
      <div class="center">
        <form >
          <div class="search">
           
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </div>
        </form>
      </div>
      
      <div class="cart">
        <a href="#" class="me-3 text-dark"><ion-icon name="heart-outline"></ion-icon></a>
        
        <a href="#" class="text-dark"><ion-icon name="person-circle-outline" onclick="openPopup()"></ion-icon>
        <div id="login">
          <div class="popup" id="popup"><span class="close-btn" onclick="closePopup()">&times;</span>
            <div class="form">
                <h4 class="mb-4" style="color: #000;">Sign In</h4>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" id="remember">
                  <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button class="btn btn-dark w-100">Sign in</button>
                <div class="text-center mt-2"><a href="#" class="text-muted">Forgot Password?</a></div>
          </div>
        </div>    

          <script>
            let popup = document.getElementById("popup");
          
            function openPopup(){
              popup.classList.add("open-popup");
            }
            function closePopup(){
              popup.classList.remove("open-popup");
            }
          </script>

      </a>

        <a href="/cart" class="text-dark cart-badge" id="cartIcon"><ion-icon name="cart-outline" id="cartIcon"></ion-icon>
        <span id="cart-count" class="badge bg-danger">0</span>
        </a>

      </div>

    </div>
</nav>

<header class="navbar navbar-expand-lg navbar-light bg-black fixed-top" style="z-index:1050; top:80px;">
  <div class="container">
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarNav" class="collapse navbar-collapse ">
      <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#products">Products</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Men's</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Women's</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Fragrance</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Brand</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Black Friday</a></li>
      </ul>
    </div>
  </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <div id="content">@yield('content')</div>    

  <div class="promo-box">
    <h3>Promo box</h3>
    <p>50% off new category</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>