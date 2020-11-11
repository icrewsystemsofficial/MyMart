<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="products with great offers and deals">
    <meta name="author" content="Bhavesh Sakpal">
    <title>My Mart</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('theme/assets/css/theme.css') }}" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="{{ asset('theme/assets/css/demo.css') }}" rel="stylesheet">
    @yield('css')
    <link rel="shortcut icon" href="https://www.freelogoservices.com/api/main/images/1j+ojVVCOMkX9Wyrexe4hGfUx+39...VULjkLP2lk+cWILrFE7i2Bv2aYuprl4MVlf+g1S1UEZLp9phSN9WIcdiRNi...ynIZ9ICHitzzywEU+0BGXUtcwKGR6HC5xdljvM6gw==" type="image/x-icon">
  </head>
  <body>
  {{View::make('navigation')}}
    
    <main class="main">
      @yield('content')
    </main>
    
    <!-- Core -->
    <script src="{{ asset('theme/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- FontAwesome 5 -->
    <script src="{{ asset('theme/assets/vendor/fontawesome/js/fontawesome-all.min.js') }}" defer></script>
    <!-- Page plugins -->
    <script src="{{ asset('theme/assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/input-mask/input-mask.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/nouislider/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/textarea-autosize/textarea-autosize.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('theme/assets/js/theme.js') }}"></script>
    @yield('js')
  </body>

<style>
 .custom{
     height:500px;
     padding-top:100px;
 }

 .slider-img{
     height:400px!important;
 }

 .custom-product{
     height: 600px;
 }
 .slider-text{
     background-color: #35443585 !important;
 }
 .trending-image{
     height:100px;
 }
.trending-item{
    float:left;
    width:20%;
}
.trend{
    margin:20px;
}
.detail-img{
    height:200px;
}
.cart-list-devider {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}

.text {
   color: blue;
}

.center{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


@media only screen and (max-width: 400px) {
  .center{
    width: 100%;
        height: 100%;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
   
  }
}


<!--product grid-->

.container{
	padding-top: 50px;
}
hr{
	width: 300px;
	border: 3px solid #434444;
}

/* Product Grid */
.product-grid{
	padding-bottom: 20px;
	padding-top: 20px;
}
.product-grid:hover{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.image{
	position: relative;
}
.overlay{
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
	width: 100%;
	opacity: 0;
	transition: .5s ease;
	background-color: rgba(67, 68, 68, 0.7);
}
.image:hover .overlay{
	opacity: 1;
}
.detail{
	color: #fff;
	font-size: 20px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
}

.buy{
	background-color: transparent;
	color: #434444;
	border-radius: 0;
	border: 1px solid #434444;
	width: 100%;
	margin-top: 20px;
}
.buy:hover{
	background-color: #434444;
	color: #fff;
}


<!-- parallex -->

.container1{
    max-width: 160px;
    margin : 0 auto ;
    background:  #0a2a43;
    font-size: 24px;
    padding: 25px;
}

.parallax{
    background: url('https://image.freepik.com/free-vector/flat-design-diwali-sale_52683-26372.jpg') no-repeat center;
    background-size: cover;
    background-attachment: fixed;
    height: 500px;
    object-fit: cover;

}



</style>

</html>
