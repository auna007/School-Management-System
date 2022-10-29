<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Admin Dashboard') }}</title>
  <!-- Fonts -->
  

 <script src="{{ asset('js/jquery.min.js') }}"></script>
<link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
<script src="{{ asset('js/toastr.min.js') }}"></script>
<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet"> 

</head>

<body> 
    

<script src="{{ mix('js/app.js') }}" ></script>

@if(Session::has('success'))
  <script> 
      toastr.error("{{!! Session::get('message') !!}}");
      toastr.info('Staff Registered Successfully.', 'Success Alert', {timeOut: 5000});

    </script>
  @endif


   <script> 
    
    toastr.success("{{!! Session::get('message') !!}}");
    toastr.warning('Staff Registered Successfully.', 'Success Alert', {timeOut: 5000});



   </script>


</body>
</html>

