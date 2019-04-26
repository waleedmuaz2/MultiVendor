<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-Commerce : @yield('title')</title>
    <!-- Scripts -->
    <!-- Fonts -->
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{  URL::asset('css2/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('css2/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    
   
<!--===============================================================================================-->
    <!---login-->
    
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">



    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/slick-theme.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/nouislider.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/font-awesome.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/login.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/style.css') }}" />
   
    <link type="text/css" rel="stylesheet" href="{{  URL::asset('css/util.css') }}" />
    

</head>
<body>
    
 


            
@yield('content')

 
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/slick.min.js')}}"></script>
    <script src="{{ asset('js/nouislider.min.js')}}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    
 </body>
</html>
