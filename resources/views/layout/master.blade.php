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
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        @show
        
        <title>Capone Clothing</title>  
    </head>
 
    <body>
        
        @include('component.nav')

        <script>
            $(document).ready(function(){
                $(".dropdown-toggle").dropdown("toggle");
            });
        </script>

        <div class="container" style="min-height: 100%; margin-bottom: -110px; padding-top: 50px; padding-bottom:35px;">
            @yield('content')

            <div class="push"></div>
        </div>

        <footer class="footer">
            @include('component.footer')
        </footer>
    </body>
</html>