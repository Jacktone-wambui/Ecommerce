@extends('master')
@section("content")
    @foreach ($products as $item)
  <div class="item">
       <h2>{{$item->name}}</h2>
       <img class="trending-image" src="{{$item->gallery}}">
       <h3>Price: {{$item->price}}</h3>
       <h4>Details: {{$item->description}}</h4>
       <h4>Category: {{$item->category}}</h4>
       <br><br>
        <form action="/add_to_cart" method="post">
          @csrf
        <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">Buy Now</button>
        <br><br>
  </div>
  @endforeach
@endsection