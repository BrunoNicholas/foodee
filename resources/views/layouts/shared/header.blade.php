
<!-- Page Header-->
      <div class="py-1 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">+256 771991162</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">foodee@gmail.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                <span class="text">3-5 Business days delivery &amp; Free Returns</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Foodee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ route('shop') }}">Shop</a>
                <a class="dropdown-item" href="{{ route('wishlist') }}">Wishlist</a>
                <a class="dropdown-item" href="{{ route('product-single') }}">Single Product</a>
                <a class="dropdown-item" href="{{ route('cart') }}">Cart</a>
                <a class="dropdown-item" href="{{ route('checkout') }}">Checkout</a>
              </div>
            </li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            <li class="nav-item cta cta-colored"><a href="{{ route('cart') }}" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->