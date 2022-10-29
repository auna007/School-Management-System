<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'School Portal') }}</title>
  <!-- Fonts -->

  @livewireStyles
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/portal.css') }}" rel="stylesheet">
 

</head>

<body id="app"> 

@include('layouts.frontend-menu')

@yield('content')
    

<footer class="app-footer">
        <div class="container text-center py-3">
             
            <small class="copyright">Designed by <a class="app-link" href="#"></a> ASCON Tech</small>
           
        </div>
      </footer><!--//app-footer-->
      
     
 @livewireScripts
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
     livewire.on('localizationUpdated', ()=> alert('test'));
    });
  </script>

  
  <script src="{{ asset('js/all.min.js') }}"> </script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/app-portal.js') }}"></script>
  <script src="{{ mix('js/app.js') }}" ></script>
</body>
</html>