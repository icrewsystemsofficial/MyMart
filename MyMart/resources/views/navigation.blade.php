<?php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg navbar navbar-dark  bg-dark py-3">
      <div class="container">
      <img src="https://www.freelogoservices.com/api/main/images/1j+ojVVCOMkX9Wyrexe4hGfUx+39...VULjkLP2lk+cWILrFE7i2Bv2aYuprl4MVlf+g1S1UEZLp9phSN9WIcdiRNi...ynIZ9ICHitzzywEU+0BGXUtcwKGR6HC5xdljvM6gw==" width="90" height="45" class="d-inline-block align-top" alt="" ></a>
        <a class="navbar-brand" href="./"><strong>MyMart</strong></a>
        <button class="navbar-toggler" type="button"   data-action="offcanvas-open" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbar_main">
          <ul class="navbar-nav ml-auto align-items-lg-center ">
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('/') }}">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contactus') }}">Contact Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/myorder') }}">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('cartlist')}}">Cart({{$total}})</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar_main_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
              <div class="dropdown-menu" aria-labelledby="navbar_1_dropdown_1">
                <a class="dropdown-item" href="./pages/homepage.html">Homepage</a>
                <a class="dropdown-item" href="./pages/about.html">About us</a>
                <a class="dropdown-item" href="./pages/sign-in.html">Sign in</a>
                <a class="dropdown-item" href="./pages/contact.html">Contact</a>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="./docs/introduction.html">Docs</a>
            </li> -->
            <form action="{{url('/search')}}" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    @if(Session::has('user'))
      <li class="nav-item dropdown pl-4">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/logout')}}">logout</a>
        </div>
      </li>
      @else
        <li class="nav-item pl-4">
        <a class="nav-link" href="{{url('/logout')}}">login</a>
      </li>
      @endif
            <div class="dropdown-divider d-lg-none my-4"></div>
            <h6 class="dropdown-header font-weight-600 d-lg-none px-0">Social Media</h6>
          </ul>
        </div>
      </div>
    </nav>


