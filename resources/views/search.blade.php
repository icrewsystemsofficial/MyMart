@extends('layouts.master')
@section('content')

<div class="custom-product mt-5 center">
<div class="col-m-4 pb-5">
<div class="trend">
<h2 class="mt-5"> Search Results</h2>
  @foreach ($products as $item)
  <div class="card m-4">
  <div class="card-body ">
  <a href="detail/{{$item['id']}}">
      <img class="trending-image center"src="{{$item['gallery']}}" alt="...">
      </a>
      <div class="p-3">
      <h3 class="card-title" >{{$item['name']}}</h3>
      <div class="card-text" >{{$item['description']}}</div>
      </div>
    </div>
    </div>
    @endforeach   
  </div>
</div>
</div>
</div>




@endsection

