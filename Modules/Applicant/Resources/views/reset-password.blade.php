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

<body class="app app-reset-password p-0">       
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto"> 
                    <div class="app-auth-branding">
                        <i class="mdi me-2 mdi-email-alert"></i>
                    </div>
                    <h2 class="auth-heading text-center mb-4">Password Reset</h2>

                    <div class="auth-intro mb-4 text-center">Enter your email address below to retrieve your login credentials.</div>
    
                    <div class="auth-form-container text-left">
                        
                        <form class="auth-form resetpass-form">                
                            <div class="email mb-3">
                                <label class="sr-only" for="reg-email">Your Email</label>
                                <input id="reg-email" name="reg-email" type="email" class="form-control login-email" placeholder="Your Email" required="required">
                            </div><!--//form-group-->
                            <div class="text-center">
                               <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto btn-primary btn-md btn-rounded">Submit <i class="mdi me-2 mdi-file-send"></i></button>
                            </div>
                        </form>
                        
                        <div class="auth-option text-center pt-5"><a class="app-link" href="{{route('applicant.login')}}" >Log in</a> <span class="px-2">|</span> <a class="app-link" href="{{route('applicant.signup')}}" >Sign up</a></div>
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
                        <h5 class="mb-3 overlay-title">Retrieve Login Credentials</h5>
                        <div>Please submit either your email to retrive your login credentials </div>
                    </div>
                </div>
            </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 
