@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/socials.css') }}" rel="stylesheet">
@stop

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<div class="content-fluid">
    <div class="page-header">
        Social Media
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="fb-page" data-href="https://www.facebook.com/Capone-Clothing-1721731367854219/" data-tabs="timeline" 
                            data-width="500px" data-height="500px" data-small-header="false" data-adapt-container-width="true" 
                                data-hide-cover="false" data-show-facepile="false"><blockquote 
                                    cite="https://www.facebook.com/Capone-Clothing-1721731367854219/" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/Capone-Clothing-1721731367854219/">Capone Clothing
                                    </a></blockquote>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            INSTAGRAM
        </div>
    </div>
</div>
@stop