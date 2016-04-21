@extends('layouts.app')

@section('title', 'Find a guest')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">{{ ucwords($guest->first_name) }}</div>

                <div class="panel-body">


                    <div class="row">

                        <!-- Profile Picture -->
                        <div class="col-lg-5">

                            <div id="profile-image">
                                <img class="profile-pic" src="../img/uploads/profile-pics/{{$guest->profile_img}}">
                            </div>

                        </div>

                        <!-- About section -->
                        <div class="col-lg-6">

                            <div id="profile-about-txt">

                                    <h1 class="notranslate">{{ ucwords($guest->first_name) }} {{ ucwords($guest->last_name) }}</h1> <hr>
                                    <h4>What we can do to help:</h4>
                                    <p>{{ $guest->about_me }}</p> <hr>

                                    <h4>Location</h4>
                                    <p class="notranslate"><strong>{{ ucwords($guest->location) }}</strong></p> <hr>

                                    <h4>Contact</h4>
                                    <p><strong>Email:</strong> {{-- $guest->contact_email --}}</p>
                                    <p><strong>Phone:</strong> {{-- $guest->contact_phone --}}</p>
                         

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
