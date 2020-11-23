@extends("master")
@section("content")
<div class="container custom-search">
    
<div class="search-wrapper">
<h2>Result for product search</h2>
    <div class="row">
<div class="col-md-4">
<a href="#">Filter</a>
</div>
<div class="col-md-8">
@foreach($products as $item)
<div class="searched-item">
<a href="/detail/{{$item['id']}}">
  <img class="trending-image" src="{{$item['gallery']}}" alt="{{$item['name']}}">
  <div class="">
    <h2>{{$item['name']}}</h2>
    <p>${{$item['price']}}</p>
    <p>{{$item['description']}}</p>
  </div>
</a>
</div>
@endforeach
</div>
</div>
</div>
</div>
@endsection