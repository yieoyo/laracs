<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartItem();
  $cartTotal = ProductController::cartTotal();
  $allItems = ProductController::cartAllItems();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">LARACS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      @if(Session::has('user'))
      <li class="nav-item">
        <a class="nav-link" href="/myorders">My Orders</a>
      </li>
      @endif
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/search">
      <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item active"><div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  Cart({{$total}})
  </button>
  <div class="dropdown-menu">
  @if(Session::has('user'))
  @foreach($allItems as $singleItem)
    <a class="dropdown-item single-item" href="/detail/{{$singleItem->id}}">
      <div class="minicart-left">
        <img class="minicart-image" src="{{$singleItem->gallery}}" alt="{{$singleItem->name}}">
      </div>
      <div class="minicart-right">
        <span>{{$singleItem->name}}</span>
        <span>${{$singleItem->price}}</span>
      </div>
    </a>
  @endforeach
  @endif
    <a class="dropdown-item" href="/cartlist"><button class="btn btn-info mt-2"> View Cart (${{$cartTotal}})</button></a>
  </div>
</div>
        
      </li>
      @if(Session::has('user'))
      <li><div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    {{Session::get('user')['name']}}
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/logout">Logout</a>
  </div>
</div></li>
@else
<li><a href="/login">Login</a>
<li><a href="/register">Register</a>
@endif
    </ul>
  </div>
</nav>