@extends('layouts.app')

@section('title', 'Find a guest')

@section('content')
<div id="wrap">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">{{ ucwords($guest->first_name) }}</div>

                <div class="panel-body">

                    <ol class="breadcrumb">
                      <li><a href="{{ url('dashboard') }}">My Dashboard</a></li>
                      <li><a href="{{URL::previous()}}">Guests</a></li>
                      <li class="active">{{ ucwords($guest->first_name)}} {{ ucwords($guest->last_name)}}</li>
                    </ol>

                    <hr>

                    <div class="row">

                        <!-- Profile Picture -->
                        <div class="col-lg-5">

                            <div id="profile-image">
                                <img class="profile-pic-square" src="../img/uploads/profile-pics/{{$guest->profile_img}}">
                            </div>

                        </div>

                        <!-- About section -->
                        <div class="col-lg-6">

                            <div id="profile-about-txt">

                                    <h1 class="notranslate">{{ ucwords($guest->first_name) }} {{ ucwords($guest->last_name) }}</h1> <hr>
                                    <h4>About me</h4>
                                    <p>{{ $guest->about_me }}</p> <hr>

                                    <h4>Additional information</h4>
                                    <p>{{ $guest->additional_info }}</p> <hr>

                                    <h4>Location</h4>
                                    <p class="notranslate"><strong>{{ ucwords($guest->location) }}</strong></p> <hr>

                                    

                                <!--     <h4>Contact</h4>
                                    <p><strong>Email:</strong> </p>
                                    <p><strong>Phone:</strong> </p> -->
                         

                            </div>

                        </div>
                        
                    </div>


                        
                    

                </div>
                        
                    

                </div>

            </div>
        </div>
    </div>
</div>

</div>
@endsection
