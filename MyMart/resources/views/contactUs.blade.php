@extends('layouts.master')
@section('content')
<main class="main">
<span class="mask bg-warning alpha-6"></span>
      <section class="slice slice-xl">
        <div class="container ">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="text-center pt-lg-md">
                <h2 class="heading h1 mb-4">
                  Any Complaint about Product?
                </h2>
                <p class="lead lh-180">
                  We are always ready to hear you Complaint regarding any product
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="slice bg-tertiary bg-cover bg-size--cover" style="background-image: url('../assets/images/backgrounds/img-1.jpg')">
        <span class="mask bg-tertiary alpha-9"></span>
        <div class="container">
          <div class="row cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-6">
              <div class="card bg-dark alpha-container text-white border-0 overflow-hidden">
                <a href="#" target="_blank">
                  <div class="card-img-bg" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Mumbai_Skyline_at_Night.jpg/800px-Mumbai_Skyline_at_Night.jpg');"></div>
                  <span class="mask bg-dark alpha-5 alpha-4--hover"></span>
                  <div class="card-body px-5 py-5">
                    <div style="min-height: 300px;">
                      <h3 class="heading h1 text-white mb-3">Mumbai </h3>
                      <p class="mt-4 mb-1 h5 text-white lh-180">
                        E: bhavesh.aero2astro@gmail.com
                      </p>
                      <p class="mb-1 h5 text-white lh-180">
                        T: 0755.222.333
                      </p>
                    </div>
                    <span href="#" class="text-white text-uppercase font-weight-500">
                      See on map
                      <i class="fas fa-arrow-right ml-2"></i>
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card bg-dark alpha-container text-white border-0 overflow-hidden">
                <a href="#" target="_blank">
                  <div class="card-img-bg" style="background-image: url('https://i.pinimg.com/originals/11/c5/d1/11c5d13948bb19454391cbb489a40b34.jpg');"></div>
                  <span class="mask bg-dark alpha-5 alpha-4--hover"></span>
                  <div class="card-body px-5 py-5">
                    <div style="min-height: 300px;">
                      <h3 class="heading h1 text-white mb-3">Mumbai</h3>
                      <p class="mt-4 mb-1 h5 text-white lh-180">
                        E: bhavesh.aero2astro@gmail.com
                      </p>
                      <p class="mb-1 h5 text-white lh-180">
                        T: 0755.222.333
                      </p>
                    </div>
                    <span href="#" class="text-white text-uppercase font-weight-500">
                      See on map
                      <i class="fas fa-arrow-right ml-2"></i>
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="slice slice-lg">
        <div class="container">
          <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-6">
              <h3 class="heading h3 mb-4">Send us a message</h3>
              <form>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <input class="form-control" placeholder="Name" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <input class="form-control" placeholder="Email address" type="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" rows="5" placeholder="Your message"></textarea>
                    </div>
                  </div>
                </div>
                <div class="mt-4">
                  <button type="submit" class="btn btn-primary px-4">
                    Send message
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-5 ml-lg-auto">
              <h3 class="heading heading-3 strong-300">
                My Mart
                <br>
                Mumbai
              </h3>
              <p class="lead mt-4 mb-4">
                E: <a href="#">bhavesh.aero2astro@gmail.com</a>
                <br>
                T: 0755.222.333
              </p>
              <p class="">
                Probably the best products with great offers and discounts . We are get our products from main sellers which us to get good quality products and best price                            
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    {{View::make('footer')}}

    @endsection