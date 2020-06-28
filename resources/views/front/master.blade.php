<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="author" content="">
<title>U-Goals</title>

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />


<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/animate.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/revslider.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/owl.theme.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/fancybox.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/font-awesome.css')}}" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
        <style>
                .logo img{
                        width:100px !important;
                }
        </style>
</head>

<body>
<div class="page">
        @include('sweetalert::alert')
    @include('front/partials/header')
    @yield('content')
    @include('front/partials/footer')
 
  
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/assets/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/assets/js/jquery.jcarousel.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/cloudzoom.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/assets/js/common.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/revslider.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/owl.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/toggle.js')}}"></script>
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 770,
                startheight: 460,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
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

        {{ Session::put('message','') }}
</script>


@stack('scripts')
</body>
</html>