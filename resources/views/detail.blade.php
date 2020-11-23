@extends("master")
@section("content")
<div class="container custom-product">
<div class="row">
    <div class="col-sm-6">
    <img src="{{$product['gallery']}}" alt="{{$product['name']}}">
    </div>
    <div class="col-sm-6">
    <h3>{{$product['name']}}</h3>
    <p>${{$product['price']}}</p>
    <p>{{$product['category']}}</p>
    <p>{{$product['description']}}</p>
    <br><br>
    <form action="/add_to_cart" method="POST">
    @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary">Add To Cart</button>
    </form>
    
    <br><br>
    <button class="btn btn-success">Buy Now</button>
    </div>
</div>
</div>
@endsection