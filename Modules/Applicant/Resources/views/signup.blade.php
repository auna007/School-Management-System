<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <i class="mdi me-2 mdi-account-key"></i>
                    </div>
                    <h2 class="auth-heading text-center mb-5"> Create Account</h2>

                     @if(Session::has('success'))
                    <p class="alert alert-success" role="alert" style="color:red">
                    <i class="mdi me-2 mdi-information-outline"></i>{{ Session::get('success') }}
                    <br> Check your email to retrieve your login details
                    </p>
                    @endif 
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" method="POST" action="{{route('signup.create')}}"> 
                            @csrf

                             <div class="password mb-3">
                                <label class="sr-only" for="signin-password">Applicant First Name</label>
                                <input id="f_name" name="f_name" type="text" class="form-control" placeholder="First Name" required="required">
                             </div><!--//form-group-->
        
                            <div class="email mb-3">
                                <label class="sr-only" for="signin-email">Email</label>
                                <input id="email" name="email" type="email" class="form-control signin-email" placeholder="Email address" required="required">
                            </div><!--//form-group-->

                           
                                <div class="extra mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="terms_and_policy" name="terms_and_policy">
                                    <label class="form-check-label" for="RememberPassword">
                                    I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div><!--//extra-->

                           
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto btn-primary btn-md btn-rounded">Signup <i class="mdi me-2 mdi-login"></i></button>
                            </div>
                        </form>
                        
                        <div class="auth-option text-center pt-5">Already have an account? Login <a class="text-link" href="{{route('applicant.login_form')}}" >here</a>.</div>
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
                        <h5 class="mb-3 overlay-title">Create New Account</h5>
                        <div>Applicant should submit First name and a valid email adress to create an account. </div>
                         
                    </div>
                </div>
            </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 
