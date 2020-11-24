<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        {{-- {!! Theme::header() !!} --}}
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->container('header')->scripts() !!}
    </head>
    {{-- <body @if (class_exists('Language', false) && Language::getCurrentLocaleRTL()) dir="rtl" @endif> --}}
    <body class="single">
        <div class="container-fluid">
    	    <div class="container">
    	        <div class="row">
    	            <div class="col-12 col-md-3 fh5co_padding_menu">
    	                <img src="{{ Theme::asset()->url('images/logo.png') }}" alt="img" class="fh5co_logo_width"/>
    	            </div>
    	            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
    	                <div class="text-center d-inline-block">
                        <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                    </div>
    	                <div class="clearfix"></div>
    	            </div>
    	        </div>
    	    </div>
    	</div>
        <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
            <div class="container padding_786">
                <nav class="navbar navbar-toggleable-md navbar-light ">
                    <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        {!!
                            Menu::renderMenuLocation('main-menu', [
                                'options' => ['class' => 'menu sub-menu--slideLeft'],
                                'view'    => 'main-menu',
                            ])
                        !!}
                    </div>
                </nav>
            </div>
        </div>
