<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>U-Goals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<meta name="_token" content="{{ csrf_token() }}" />--}}
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    {{--<link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">--}}

    <!-- plugin css -->
    <link href="{{asset('admin/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
   <!-- summernote -->
    <link href="{{asset('admin/assets/libs/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css" />
    <!-- Plugins css-->
    <link href="{{asset('admin/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />

    <!-- Vendor js -->
    <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

    @yield('after-style')

</head>

<body>

    @include('admin.partials.header');
    @include('admin.partials.menu');
    @yield('content')




    <!-- App js -->
    <script src="{{asset('admin/assets/js/app.min.js')}}"></script>

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

        {{ Session::put('message','') }}
    </script>

    @yield('after-script')
    @stack('scripts')

</body>
</html>
