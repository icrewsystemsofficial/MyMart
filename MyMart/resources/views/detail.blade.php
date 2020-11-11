@extends('layouts.master')
@section('content')

<div class="container">
<div class="row" style="padding-top:70px">
<div class="card mb-4" style="max-width: 800px;">
  <div class="row">
    <div class="col-md-4">
      <img src="{{$product['gallery']}}" style="width: 250px; padding-top: 50px "class="card-img pl-5" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body m-5">
        <h5 class="card-title">{{$product['name']}}</h5>
        <h5 class="card-title">{{$product['price']}}</h5>
        <h5 class="card-title">{{$product['category']}}</h5>
        <p class="card-text">Desp : {{$product['description']}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <form action="{{url('add_to_cart')}}" method="POST">
@csrf
<input type="hidden" name="product_id" value={{$product['id']}}>
<button class="btn btn-primary">Add to cart</button>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<br>
<br>


{{View::make('footer')}}


@endsection

