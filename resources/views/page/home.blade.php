@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@stop

@section('content')

    @include('component.messages')

    <!-- Carousel Starts -->
    <div class="row" style="margin-top: 30px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img id="caponeCarousel" class="first-slide" src="images/caponeHeader1.png" alt="First slide">
                </div>
                <div class="item">
                    <img id="caponeCarousel" class="second-slide" src="images/caponeHeader3.png" alt="Second slide">
                </div>
                <div class="item">
                    <img id="caponeCarousel" class="third-slide" src="images/caponeHeader2.png" alt="Third slide">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Carousel Ends -->

    <hr class="featurette-divider">

    <div class="home-header">        
        <div class="home-header-heavy">CAPONE</div>
        <div class="home-header-light">CLOTHING</div>
    </div>

    <div class="row featurette">
        <div class="col-xs-10 col-xs-offset-1
                        col-sm-8 col-sm-offset-0 
                            col-md-8 col-md-offset-0 
                                col-lg-8 col-lg-offset-0">
            <h2 class="featurette-heading">CLEARANCE SALE!!</h2>
            <p class="lead">
                As we prepare for the arrival of new stock of new styles,
                everything on our website is HALF PRICE!
            </p>
            <p class="lead">
                The most expensive item is only &#163;10. Check it out by clicking 'STORE' above.
            </p>
            <p class="lead"> 
                 We can't wait for you to see some of our new stock which will be launching very soon.
            </p>
        </div>
        <div class="col-xs-10 col-xs-offset-1 
                        col-sm-4 col-sm-offset-0
                            col-md-4 col-md-offset-0
                                col-lg-4 col-lg-offset-0">
            <div class="lpanel">
            	<img src="images/newStock.png" class="large-panel"> 
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-xs-10 col-xs-push-1 
                        col-sm-8 col-sm-push-4 
                            col-md-8 col-md-push-4
                                col-lg-8 col-lg-push-4">
            <h2 class="featurette-heading">CAPONE CLOTHING</h2>
            <p class="lead"> 
                Capone Clothing boasts a range of comfortable and quality street wear, without the steep price tag            
            </p>
            <p class="lead"> 
                Capone Clothing isn't about cheap materials and massive profits, we're about spreading an 
                ambitious vibe and creating the Capone Family.
            </p>
            <p class="lead"> 
                Make sure you get in touch using...
            <br/>
                <text style="font-size: 22px; font-weight:700;"> #CAPONECLOTHING</text>
            </p>
        </div>
        <div class="col-xs-10 col-xs-offset-1
                        col-sm-4 col-sm-offset-0 col-sm-pull-8 
                            col-md-4 col-md-offset-0 col-md-pull-8
                                col-lg-4 col-lg-offset-0 col-lg-pull-8">
            <div class="lpanel">
                <img src="images/Home1.png" class="large-panel">
            </div>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- 
        
        USE THIS FOR PROMOTIONAL ITEMS??? 

    -->

    <div class="row">
        <h2 style="margin-top:0px; margin-bottom: 15px; text-align: center;">FEATURED ITEMS</h2>
        <div class="col-xs-10 col-xs-offset-1
                        col-sm-4 col-sm-offset-0 
                            col-md-4 col-md-offset-0
                                col-lg-4 col-lg-offset-0">
            <figure class="profile">
                <img src="images/caponeHome1.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
        <div class="col-xs-10 col-xs-offset-1  
                        col-sm-4 col-sm-offset-0 
                            col-md-4 col-md-offset-0
                                col-lg-4 col-lg-offset-0">
            <figure class="profile">
                <img src="images/caponeHome2.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
        <div class="col-xs-10 col-xs-offset-1 
                        col-sm-4 col-sm-offset-0 
                            col-md-4 col-md-offset-0
                                col-lg-4 col-lg-offset-0">
            <figure class="profile">
                <img src="images/caponeHome3.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
    </div>
@stop