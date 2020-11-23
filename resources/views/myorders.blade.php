@extends("master")
@section("content")
<div class="container custom-cart">
    
<div class="cartlist-wrapper">
<h2>My Orders</h2>
    <div class="row">
<div class="col-md-10 offset-1">
@foreach($orders as $order)
<div class="cart-item row cart-list-divider">
    <div class="col-md-4">
<a href="/detail/{{$order->id}}">
  <img class="trending-image" src="{{$order->gallery}}" alt="{{$order->name}}">
  </a>
  </div>
  <div class="col-md-4">    
    <h2>Name: {{$order->name}}</h2>
    <p>Price: {{$order->price}}</p>
    <p>Delivery Status: {{$order->status}}</p>
    <p>Address: {{$order->address}}</p>
    <p>Payment Method: {{$order->payment_method}}</p>
    <p>Payment Status: {{$order->payment_status}}</p>
  </div>
  
  
  </div>


@endforeach
</div>
</div>
</div>
</div>
@endsection