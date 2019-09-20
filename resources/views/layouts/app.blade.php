<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png" />
    <!-- Title and description ================================================== -->
    <title>Arena Electro</title>

    <!-- header-css-file  ================================================== -->
    <link href="{{asset('frontEnd/assets/css/jquery.swiper.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('frontEnd/assets/css/arenafont.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('frontEnd/assets/css/bootstrap.4x.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('frontEnd/assets/css/jquery.plugin.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('frontEnd/assets/css/rateit.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('frontEnd/assets/css/bc.style.scss.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('frontEnd/assets/css/bc_wl_cp_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('frontEnd/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('frontEnd/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" media="all" />

</head>

<body class="category-mode-false cata-grid-4 lazy-loading-img" id="yinimini-blue">


  @include('front.partials.header');
  <h5> {{ Session::get('message') }}<h5>
    @include('front.partials.nav')
    @yield('content')


    <!-- Tost-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
      @if(Session::has('message'))
        var type="{{Session::get('alert-type')}}"


        switch(type){

              case 'success':
                  toastr.success("{{ Session::get('message') }}");

                  break;

              case 'error':
                toastr.error("{{ Session::get('message') }}");

                break;
        }

      @endif
    </script>

  <!-- Footer-js-file  ================================================== -->
  <script src="{{asset('frontEnd/assets/js/jquery-1.11.0.min.js')}}"></script>
  <script async src="{{asset('frontEnd/assets/js/lazysizes.min.js')}}" async></script>
  <script src="{{asset('frontEnd/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/bootstrap.4x.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/modernizr.js')}}" async></script>
  <script src="{{asset('frontEnd/assets/js/jquery.swiper.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/bc.isotope.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/packery-mode.pkgd.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/cookies.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/ouibounce.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.jgrowl.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.plugin.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.countdown.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/bc.ajax-search.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/option_selection.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.rateit.min.js')}}"></script>

  <script src="{{asset('frontEnd/assets/js/currencies.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/jquery.currencies.min.js')}}"></script>

  <script src="{{asset('frontEnd/assets/js/bc.global.js')}}"></script>
  <script src="{{asset('frontEnd/assets/js/bc.script.js')}}"></script>

  <script type="text/javascript">
      var _bc_config = {
        "home_slideshow_auto_delay" 	: ""
        ,"show_multiple_currencies" 	: "true"
        ,"enable_image_blance" 			: "false"
        ,"image_blance_width" 			: ""
        ,"image_blance_height" 			: "92"
        ,"enable_title_blance"			: "false"
      };
  </script>




</body>

</html>
