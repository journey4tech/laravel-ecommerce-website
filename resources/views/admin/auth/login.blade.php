@extends('admin.partials.app')

@section('content')
<div class="account-pages mt-5 mb-5">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-md-8 col-lg-6 col-xl-5">
                       <div class="card">

                           <div class="card-body p-4">

                               <div class="text-center w-75 m-auto">
                                   <a href="index.html">
                                       <span><img src="{{asset('frontEnd/assets/images/logo.png')}}" alt="" height="70"></span>
                                   </a>
                                   <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                               </div>

                               <h5 class="auth-title">Sign In</h5>

                               {!!Form::open(array('url'=> route('admin.login'),'method'=>'post'))!!}

                                   <div class="form-group mb-3">
                                     {{Form::label('admin_email_address', 'Email', array('class' => ''))}}
                                     {{Form::email('admin_email_address', $admin_email_address = null, array('class' => 'form-control input-md','id'=>'admin_email_address',  'placeholder' => 'example@domain.com'))}}
                                   </div>

                                   <div class="form-group mb-3">
                                     {{Form::label('admin_password', 'Password', array('class' => ''))}}
                                     {{Form::password('admin_password',  array('class' =>'form-control input-md', 'id'=>'admin_password', 'placeholder' => 'Password'))}}
                                   </div>

                                   <!-- <div class="form-group mb-3">
                                       <div class="custom-control custom-checkbox checkbox-info">
                                           <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                           <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                       </div>
                                   </div> -->

                                   <div class="form-group mb-0 text-center">
                                       <button type="submit" class="btn btn-danger btn-block" type="submit"> Log In </button>
                                   </div>

                               </form>

                               <!-- <div class="text-center">
                                   <h5 class="mt-3 text-muted">Sign in with</h5>
                                   <ul class="social-list list-inline mt-3 mb-0">
                                       <li class="list-inline-item">
                                           <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                       </li>
                                       <li class="list-inline-item">
                                           <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                       </li>
                                       <li class="list-inline-item">
                                           <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                       </li>
                                       <li class="list-inline-item">
                                           <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                       </li>
                                   </ul>
                               </div> -->

                           </div> <!-- end card-body -->
                       </div>
                       <!-- end card -->

                       {{--<div class="row mt-3">--}}
                           {{--<div class="col-12 text-center">--}}
                               {{--<p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>--}}
                               {{--<p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ml-1"><b class="font-weight-semibold">Sign Up</b></a></p>--}}
                           {{--</div> <!-- end col -->--}}
                       {{--</div>--}}
                       <!-- end row -->

                   </div> <!-- end col -->
               </div>
               <!-- end row -->
           </div>
           <!-- end container -->
       </div>
       <!-- end page -->

@endsection
