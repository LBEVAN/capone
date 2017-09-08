@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="home-header">        
        <div class="home-header-heavy">CAPONE</div>
        <div class="home-header-light">CLOTHING</div>
    </div>

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

    <div class="row featurette">
        <div class="col-xs-10 col-xs-offset-1 
                        col-sm-6 col-sm-offset-0 
                            col-md-6 col-md-offset-0 
                                col-lg-6 col-lg-offset-0">
            <h2 class="featurette-heading">Swansea's Next Fitness Model</h2>
            <p class="lead">
                This year we will be sponsoring the Swansea Next Fitness Model.
                We'll be giving prizes to 1st, 2nd and 3rd places and there will also be a stall set up on the day.
            </p>
            <p class="lead">
                This is a rewarding event for everyone involved, 
                from bringing the community together in such a positive way to starting careers in the fitness industry.
            </p>
            <p class="lead"> 
                Come join us in Swansea at The Penyrheol Theatre on Saturday 30th September - We can't wait to see you there! 
            </p>
        </div>
        <div class="col-xs-10 col-xs-offset-1 
                        col-sm-6 col-sm-offset-0 
                            col-md-6 col-md-offset-0 
                                col-lg-6 col-lg-offset-0">
            <div class="lpanel">
                <img src="images/caponeSwanseaNTM.png" class="large-panel">
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-xs-10 col-xs-offset-1
                        col-sm-6 col-sm-offset-0 col-sm-push-6 
                            col-md-6 col-md-offset-0 col-md-push-6 
                                col-lg-6 col-lg-offset-0 col-lg-push-6">
            <h2 class="featurette-heading">Capone Clothing</h2>
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
                        col-sm-6 col-sm-offset-0 col-sm-pull-6 
                            col-md-6 col-md-offset-0 col-md-pull-6 
                                col-lg-6 col-lg-offset-0 col-lg-pull-6">
            <div class="lpanel">
                <img src="images/caponeHome.png" class="large-panel">
            </div>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- 
        
        USE THIS FOR PROMOTIONAL ITEMS??? 

    -->

    <div class="row">
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
                <img src="images/caponeSwanseaNTM.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
        <div class="col-xs-10 col-xs-offset-1  
                        col-sm-4 col-sm-offset-0 
                            col-md-4 col-md-offset-0
                                col-lg-4 col-lg-offset-0">
            <figure class="profile">
                <img src="images/caponeHome.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
    </div>
@stop