@extends('layouts.master')
@section('content')


<section class="py-xl bg-cover bg-size--cover" style="background-image: url('../assets/images/backgrounds/img-1.jpg')">
        <span class="mask bg-danger alpha-6"></span>
        <div class="container d-flex align-items-center no-padding">
          <div class="col">
          @if (\Session::has('warning'))
    <div class="alert alert-warning">
        <ul>
            <li>{!! \Session::get('warning') !!}</li>
        </ul>
    </div>
@endif
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="card bg-primary text-white">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary btn-nobg btn-zoom--hover mb-5">
                    <a href="{{url('home')}}"><span class="btn-inner--icon"><i class="fas fa-arrow-left"></i></span></a>
                    </button>
                    <span class="clearfix"></span>
                    <img src="https://www.freelogoservices.com/api/main/images/1j+ojVVCOMkX9Wyrexe4hGfUx+39...VULjkLP2lk+cWILrFE7i2Bv2aYuprl4MVlf+g1S1UEZLp9phSN9WIcdiRNi...ynIZ9ICHitzzywEU+0BGXUtcwKGR6HC5xdljvM6gw==" style="width: 120px; height: 80px;">
                    <h4 class="heading h3 text-white pt-3 pb-5">Welcome back,<br>
                      login to your account.</h4>
                    <form class="form-primary"  action="{{url('login')}}" method="POST">
                      <div class="form-group">
                        @csrf
                        <input type="email" name="email" class="form-control" id="input_email" placeholder="Your email">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control" id="input_password" placeholder="Password">
                      </div>
                      <div class="text-right mt-4"><a href="{{url('register')}}" class="text-white">New User?</a></div>
                      <button type="submit" class="btn btn-block btn-lg bg-white mt-4">Sign in</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection