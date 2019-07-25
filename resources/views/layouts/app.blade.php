<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('head')
    <title>{{ config('app.name', 'Product File') }}</title>
    
    
</head>

<body id="page-top app">
    
    @include('inc.navbar')
    <div id="wrapper">
        @include('inc.sidebar')

        <div class="container-fluid">
            @include('inc.messages')
            @yield('content')
            
        </div>
        @include('inc.footer')
    </div>
        
        

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    @include('inc.footer')
    
    {{-- <script src="{{ asset('js/jquery-3.3.1.js') }}" defer></script> --}}
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
   @yield('extra-js')

   
</body>
</html>