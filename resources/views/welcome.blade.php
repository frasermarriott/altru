@extends('layouts.home')

@section('title', 'Home')

@section('content')


<!-- Display verification error -->
@if(Session::has('verification_error'))
    <div class="alert alert-warning fade in verification-error">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{{ Session::get('verification_error') }}</p>
    </div>
@endif    


<div class="video-container">
    <div class="row">
        <div class="col-lg-10 col-md-offset-1">
            <div class="welcome">
                <img class="img-responsive center-block altru-logo-video-overlay" src="{{ asset('img/altru-main-logo3.png') }}" alt="Main logo for Altru">
                    <p class="welcome-text">
                        Connect with loved ones, volunteer
                        &amp; aid those who need a helping hand
                    </p>

                <div class="welcome-buttons">
                    <!-- <button class="btn btn-default btn-altru-white" type="button" onclick="location.href='https://vimeo.com/163542969';">About Us</button> -->
                    <!-- <button class="btn btn-default btn-altru-white" type="button" onclick="location.href='/login';">Log in</button> -->
                    <a class="btn btn-default btn-altru-white" href="{{ url('about') }}">About Us</a>
                    <a class="btn btn-default btn-altru-white" href="{{ url('getstarted') }}">Get Started</a>
                </div>


            </div>

        </div>
    </div>
</div>
<div>
    <video class="video-background" poster="{{ asset('img/video-poster.jpg') }}"
           data-origin-x="20"
           data-origin-y="50"
           autoplay
           preload="auto">

        <source class="video-overlay" src="{{ asset('video/background1.webm') }}" type="video/webm">
        <source class="video-overlay" src="{{ asset('video/background1.mp4') }}" type="video/mp4">


    </video>
</div>



@endsection
