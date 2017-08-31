<!doctype html> 
<html lang="{{ app()->getLocale() }}"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @section('head')
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
            <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        @show
        
        <title>Capone Clothing</title>  
    </head>
 
    <body>
        
        @include('component.nav')

        <div class="container" style="min-height: 100%; margin-bottom: -200px; padding-top: 50px; padding-bottom:15px;">
            @yield('content')

            <div class="push"></div>
        </div>

        <footer class="footer">
            @include('component.footer')
        </footer>
    </body>
</html>