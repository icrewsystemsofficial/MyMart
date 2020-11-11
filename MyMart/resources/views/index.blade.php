@extends('layouts.master')

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('content')
<section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('{{ asset('theme/assets/images/backgrounds/img-1.jpg') }}')">
  <span class="mask bg-primary alpha-7"></span>
  <div class="spotlight-holder py-lg pt-lg-xl">
    <div class="container d-flex align-items-center no-padding">
      <div class="col">
        <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
          <div class="col-7">
            <div class="text-center mt-5">
              <img src="{{ asset('theme/assets/images/brand/icon.png') }}" style="width: 200px;" class="img-fluid animated" data-animation-in="jackInTheBox" data-animation-delay="1000">
              <h2 class="heading display-4 font-weight-400 text-white mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="2000">
                THIS IS PAGE ONE
              </h2>
              <p class="lead text-white mt-3 lh-180 c-white animated" data-animation-in="fadeInUp" data-animation-delay="2500">                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="slice-lg">
  <div class="container">
    <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
      <div class="col-lg-6 order-lg-2 ml-lg-auto">
        <div class="block block-image">
          <img src="{{ asset('theme/assets/images/prv/device-1.png') }}" class="img-fluid img-center">
        </div>
      </div>
      <div class="col-lg-5 order-lg-1">
        <div class="row-wrapper">
          <div class="row">
            <div class="col">
              <div class="d-flex align-items-start">
                <div class="icon icon-lg">
                  <i class="fab fa-twitter"></i>
                </div>
                <div class="icon-text">
                  <h3 class="heading h4">Latest Bootstrap framework</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="d-flex align-items-start">
                <div class="icon icon-lg">
                  <i class="fab fa-sass"></i>
                </div>
                <div class="icon-text">
                  <h3 class="heading h4">Built with Sass <small>(included)</small></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="d-flex align-items-start">
                <div class="icon icon-lg">
                  <i class="fas fa-tint"></i>
                </div>
                <div class="icon-text">
                  <h3 class="heading h4">Extended color palette</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid px-0">
    <div class="card-group flex-column flex-md-row">
      <div class="card bg-primary text-white px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
        <div class="card-body">
          <h1 class="heading h2 text-white">Theme as framework</h1>
          <p class="mt-4">
            Boomerang was designed as its own extended version of Bootstrap, built for offering a complete solution for various industries — business, real estate, travel and much more.
          </p>
          <a href="#" class="btn btn-secondary mt-4">Learn more</a>
        </div>
      </div>
      <div class="card bg-secondary px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
        <div class="card-body">
          <h1 class="heading h2">Even more components</h1>
          <p class="mt-4">
            We know how much you love Bootstrap components. That's why we've customized, and also, introduced dozens of completely new utilities, components and plugins.
          </p>
          <a href="#" class="btn btn-primary mt-4">Learn more</a>
        </div>
      </div>
      <div class="card bg-tertiary text-white px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
        <div class="card-body">
          <h1 class="heading h2 text-white">Tons of variables</h1>
          <p class="mt-4">
            Theme components inherit much of their style from variables, exactly like Bootstrap. Change a few values and the theme adapts. Customization has never been easier.
          </p>
          <a href="#" class="btn btn-secondary mt-4">Learn more</a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection

@section('title')
  <h1>My App</h1>
@endsection


