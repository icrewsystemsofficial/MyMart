@extends('layouts.master')
@section('content')

<div class="custom-product pt-5">
          <div class="col-sm-10">
            <div class="trend">
                <h2>Cart List</h2>
                <a class="btn btn-success " href="{{ url('/ordernow') }}">Order Now</a>
                  @foreach ($products as $item)
                  <div class="row search-item cart-list-devider pt-3">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                    </div>
                    <div class="col-sm-4">  
                              <div class="">
                              <h3>{{$item->name}}</h3>
                              <h5>{{$item->description}}</h5>
                              </div>  
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/removecart/') }}/{{$item->cart_id}}" class="btn btn-warning" >Remove From Cart</a>      
                    </div>
                  </div>  
                  @endforeach
            

                </div>
              </div>
          </div>
@endsection