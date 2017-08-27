<!doctype html> 
<html lang="{{ app()->getLocale() }}"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @section('head')
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
        @show
        
        <title>Capone Clothing</title>  
    </head>
 
    <body>
        
        @include('component.nav')

        <div class="container" style="padding-top: 50px;">
            @yield('content')
        </div>

    </body>
</html>