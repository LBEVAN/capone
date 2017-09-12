<!doctype html> 
<html lang="{{ app()->getLocale() }}"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
 
    <body style="font-family: Open Sans Condensed, sans-serif; font-size: 14px;">

        <div class="container content-container">
            <div class="home-header" style="text-align: center">        
                <div style="font-size: 3.5rem;">CAPONE</div>
                <div style="font-size: 1.5rem;">CLOTHING</div>
            </div>

            <hr class="featurette-divider">

            @yield('content')
        </div>
    </body>
</html>