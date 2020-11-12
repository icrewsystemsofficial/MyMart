@extends('layouts.master')
@section('content')

<div class="custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <span class="mask bg-danger alpha-7"></span>
        <ol class="carousel-indicators">

        </ol>


        <div class="carousel-inner ">
            @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}} ">
                <img class="slider-img center" data-spotlight="fullscreen" src="{{$item['gallery']}}" alt="...">
                <div class="carousel-caption slider-text">
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['description']}}</p>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>
</div>


<div class="container pb-5">
    <div class="text-center heading p-5">
        <h1>Trending products</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    @foreach ($products as $item)
                    @if($item->category == 'MOBILE')
                    <div class="col-3"><a href="detail/{{$item['id']}}"> <img class="d-block w-100"
                                src="{{$item['gallery']}}" style="height:150px; width:50px;" alt="..."></a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    @foreach ($products as $item)
                    @if($item->id > '9'&& $item->id < '14' ) <div class="col-3"><a href="detail/{{$item['id']}}"> <img
                                class="d-block w-100" src="{{$item['gallery']}}" style="height:150px; width:50px;"
                                alt="..."></a></div>
                @endif
                @endforeach

            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                @foreach ($products as $item)
                @if($item->id > '14'&& $item->id < '19' ) <div class="col-3"><a href="detail/{{$item['id']}}">
                        <img class="d-block w-100" src="{{$item['gallery']}}" style="height:150px; width:50px;"
                            alt="..."></a></div>
            @endif
            @endforeach
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container1 pt-5">

    <div class="parallax">
    </div>

</div>

<div class="container">
    <h1 class="text-center pt-4">Tv 's</h1>
    <hr>

    <div class="row">
        @foreach ($products as $item)
        @if($item->category == 'TV')
        <!-- Product  -->
        <div class="col-md-4 product-grid">
            <div class="image">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="w-100">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h5 class="text-center">{{$item['name']}}</h5>
            <h5 class="text-center">{{$item['price']}}</h5>
            <a href="detail/{{$item['id']}}" class="btn buy">BUY</a>
        </div>
        @endif
        <!-- ./Product -->
        @endforeach

    </div>
</div>
<div class="container1">

    <div class="parallax">
    </div>

</div>


<div class="container pb-5">
    <div class="text-center heading p-5">
        <h1>Washing Machine</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    @foreach ($products as $item)
                    @if($item->category == 'MOBILE')
                    <div class="col-3"><a href="detail/{{$item['id']}}"> <img class="d-block w-100"
                                src="{{$item['gallery']}}" style="height:150px; width:50px;" alt="..."></a></div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    @foreach ($products as $item)
                    @if($item->id > '9'&& $item->id < '14' ) <div class="col-3"><a href="detail/{{$item['id']}}">
                            <img class="d-block w-100" src="{{$item['gallery']}}" style="height:150px; width:50px;"
                                alt="..."></a></div>
                @endif
                @endforeach

            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                @foreach ($products as $item)
                @if($item->id > '14'&& $item->id < '19' ) <div class="col-3"><a href="detail/{{$item['id']}}"> <img
                            class="d-block w-100" src="{{$item['gallery']}}" style="height:150px; width:50px;"
                            alt="..."></a></div>
            @endif
            @endforeach
        </div>
    </div>

    </a>
</div>


<section>
    <div class="container-fluid px-0 pt-5">
        <div class="card-group flex-column flex-md-row">
            <div class="card bg-primary text-white px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
                <img class="card-img"
                    src="https://image.shutterstock.com/image-vector/big-diwali-sale-header-banner-260nw-1206887890.jpg"
                    alt="Card image">
                <div class="card-body">
                    <h1 class="heading h2 text-white">Diwali is on head then Why are waiting for?</h1>
                    <p class="mt-4">

                    </p>
                    <a href="#" class="btn btn-secondary mt-4">View more</a>
                </div>
            </div>
            <div class="card bg-secondary px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
                <img class="card-img"
                    src="https://resize.indiatvnews.com/en/resize/newbucket/715_-/2019/10/flipkart-big-diwali-sale-2019-on-mobile-1571297130.jpg"
                    alt="Card image">
                <div class="card-body">
                    <h1 class="heading h2">Mobiles at such low prices</h1>
                    <p class="mt-4">
                        Grab some interesting deals on Mobiles
                        on upto 20% to 30% off on latest mobiles ,exchanges offers and many more
                    </p>
                    <a href="#" class="btn btn-primary mt-4">View more</a>
                </div>
            </div>

</section>

<div class="container pb-5 ">
    <div class="text-center heading p-5">
        <h1>Mobiles</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    @foreach ($products as $item)
                    @if($item->category == 'MOBILE')
                    <div class="col-3"><a href="detail/{{$item['id']}}"> <img class="d-block w-100"
                                src="{{$item['gallery']}}" style="height:150px; width:50px;" alt="..."></a></div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    @foreach ($products as $item)
                    @if($item->id > '9'&& $item->id < '14' ) <div class="col-3"><a href="detail/{{$item['id']}}"> <img
                                class="d-block w-100" src="{{$item['gallery']}}" style="height:150px; width:50px;"
                                alt="..."></a></div>
                @endif
                @endforeach

            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                @foreach ($products as $item)
                @if($item->id > '14'&& $item->id < '19' ) <div class="col-3"><a href="detail/{{$item['id']}}"> <img
                            class="d-block w-100" src="{{$item['gallery']}}" style="height:150px; width:50px;"
                            alt="..."></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>


<br>
<br>


{{View::make('footer')}}

@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection