<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/"> <img src="{{ URL::to('src/images/shop.png') }}" class="card-img-top" alt="Supplement Image" style="width: 30px; height: 30px;"> Shopping Cart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <li class="nav-item dropdown mr-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Shop Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Latest Products</a>
            <a class="dropdown-item" href="#">On Sale</a>
            <a class="dropdown-item" href="#">Ne Arrival</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Free Products</a>
        </div>
      </li>

      

    <!--
      <li class="nav-item active">
        <a class="nav-link" href="/">Products <span class="sr-only">(current)</span></a>
      </li>-->
      

        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search product" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

    </ul>

    <ul class="navbar-nav navbar-right">
        <li class="nav-item">
        <a class="nav-link" href="{{ route('product.shoppingCart') }}"> <i class="fas fa-shopping-cart"></i> 
        Shopping Cart
        <span class="badge badge-danger"> {{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }} </span>
        </a>
        </li>

        
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> User Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
            <a class="dropdown-item" href="{{ route('user.profile') }}">User profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('user.logout')}}">Logout</a>
          @else
            <a class="dropdown-item" href="{{ route('user.signup') }}">Signup</a>
            <a class="dropdown-item" href="{{ route('user.signin') }}">Sigin</a>
          @endif
        </div>
      </li>

    </ul>
    
  </div>
</nav>