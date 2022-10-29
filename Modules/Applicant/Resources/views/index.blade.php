<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, max-age=0, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
 
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title></title>
  <!-- Fonts -->

  {{-- Laravel Mix - CSS File --}}
  {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
 
  <!-- Styles -->
  <link href="{{ asset('css/portal.css') }}" rel="stylesheet">

   <!-- Custom CSS -->
    <link href="{{asset('applicant/css/style.min.css') }}" rel="stylesheet">
 
</head>

<body class="app app-login p-0">        
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto"> 
                    <div class="app-auth-branding mb-4">
                        <i class="mdi me-2 mdi-lock-outline"></i>
                    </div>
                    <h2 class="auth-heading text-center mb-5"> Login</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" method="POST" action="{{route('applicant.login')}}"> 
                        @csrf 
                            <div class="email mb-3">
                                <label class="sr-only" for="signin-email">Email</label>
                                <input id="username" name="username" type="email" class="form-control signin-email" placeholder="Email address" required="required">
                            </div><!--//form-group-->
                            <div class="password mb-3">
                                <label class="sr-only" for="signin-password">Application ID</label>
                                <input id="password" name="password" type="text" class="form-control" placeholder="Application ID" required="required">
                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                            <label class="form-check-label" for="RememberPassword">
                                            Remember me
                                            </label>
                                        </div>
                                    </div><!--//col-6-->
                                    <div class="col-6">
                                        <div class="forgot-password text-end">
                                            <a href="{{route('applicant.pass_retrive')}}">Forgot password?</a>
                                        </div>
                                    </div><!--//col-6-->
                                </div><!--//extra-->
                            </div><!--//form-group-->
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto btn-primary btn-md btn-rounded">Login <i class="mdi me-2 mdi-login"></i></button>
                            </div>
                        </form>
                        
                        <div class="auth-option text-center pt-5">New applicant? Sign up <a class="text-link" href="{{route('applicant.signup')}}" >here</a>.</div>
                    </div><!--//auth-form-container-->  

                </div><!--//auth-body-->
            
                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                         
                    <small class="copyright">Designed by <a class="app-link" href="http://ascontech.com" target="_blank">ASCON Tech</a> </small>
                       
                    </div>
                </footer><!--//app-auth-footer-->   
            </div><!--//flex-column-->   
        </div><!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    <div class="overlay-content p-3 p-lg-4 rounded">
                        <h5 class="mb-3 overlay-title">Applicant Login</h5>
                        <div>Please submit your login credentials for authentication to enable you review your application status </div>
                         
                    </div>
                </div>
            </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 
