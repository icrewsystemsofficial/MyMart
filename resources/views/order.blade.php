@extends('layouts.master')
@section('content')

<div class="custom-product pt-5">
          <div class="col-sm-10 ">
            <div class="trend">
                <h2 class="p-4">Order List</h2>
                  @foreach ($orders as $item)
                  <div class="row search-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                    </div>
                    <div class="col-sm-4">  
                              <div class="">
                              <h3>{{$item->name}}</h3>
                              <h5>Delivery status : {{$item->status}}</h5>
                              <h5>Payment Status : {{$item->payment_status}}</h5>
                              <h5>Payment Mode : {{$item->payment}}</h5>
                              <h5><b>Price : Rs . {{$item->price}}</h5>
                              </div>  
                    </div>
                    <div class="col-sm-4">   
                    </div>
                  </div>  
                  @endforeach
            

                </div>
              </div>
          </div>
          
@endsection