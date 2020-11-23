@extends("master")
@section("content")
<div class="container custom-cart">
    
<div class="cartlist-wrapper">
<h2>Result for product search</h2>
<a href="ordernow" class="btn btn-success">Order Now</a>
    <div class="row">
<div class="col-md-10 offset-1">
@foreach($products as $item)
<div class="cart-item row cart-list-divider">
    <div class="col-md-4">
<a href="/detail/{{$item->id}}">
  <img class="trending-image" src="{{$item->gallery}}" alt="{{$item->name}}">
  </a>
  </div>
  <div class="col-md-4">    
    <h2>{{$item->name}}</h2>
    <p>${{$item->price}}</p>
    <p>{{$item->description}}</p>
  </div>
  
  <div class="col-md-2"> 
<a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove From Cart</a>
  </div>
  </div>


@endforeach
</div>

<a href="ordernow" class="btn btn-success">Order Now</a>
</div>
</div>
</div>
@endsection