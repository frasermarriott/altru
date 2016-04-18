@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ ucwords(\Auth::user()->name) }}'s Profile</div>

                <div class="panel-body">


@if($profiletype=='guest')

                    <div class="row">

                        <!-- Profile Picture -->
                        <div class="col-lg-5">

                            <div id="profile-image">
                                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Profile%20Image&w=300&h=300">
                            </div>

                        </div>

                        <!-- About section -->
                        <div class="col-lg-6">

                            <div id="profile-about-txt">

                                <!-- Profile update message -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif

                                <!-- Check if user already exists in the 'guests' table -->
                                @if($profile_details_exist)   
                                    <h2>You haven't added any information to your profile yet</h2>
                                    <a href="{{ url('profile/edit') }}" class="btn btn-primary">Edit Profile</a>   
                                @else
                                    <h1 class="notranslate">{{ $user->first_name.' '.$user->last_name }}</h1>
                                    <h3>About Me</h3>
                                    <p>{{ $user->about_me }}</p>
                                    <h4>Additional information</h4>
                                    <p>{{ $user->additional_info }}</p>

                                    <h3>Location</h3>
                                    <p class="notranslate">{{ $user->location }}</p>

                                    <h3>Spoken Languages</h3>
                                    <p>{{ $user->language }}</p>
                                @endif
                                
                            </div>

                        </div>

                    </div>


@elseif($profiletype=='volunteer') 



                    <div class="row">

                        <!-- Profile Picture -->
                        <div class="col-lg-5">

                            <div id="profile-image">
                                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Profile%20Image&w=300&h=300">
                            </div>

                        </div>

                        <!-- About section -->
                        <div class="col-lg-6">

                            <div id="profile-about-txt">

                                <!-- Profile update message -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif

                                <!-- Check if user already exists in the 'volunteers' table -->
                                @if($profile_details_exist)   
                                    <h2>You haven't added any information to your profile yet</h2>
                                    <a href="{{ url('profile/edit') }}" class="btn btn-primary">Edit Profile</a>   
                                @else
                                    <h1 class="notranslate">{{ $user->family_name }}</h1>
                                    <h3>About</h3>
                                    <p>{{ $user->about_family }}</p>

                                    <h3>Location</h3>
                                    <p class="notranslate">{{ $user->location }}</p>

                                    <h3>Contact</h3>
                                    <p><strong>Email:</strong> {{ $user->contact_email }}</p>
                                    <p><strong>Phone:</strong> {{ $user->contact_phone }}</p>
                                @endif  

                            </div>

                        </div>
                        
                    </div>


@endif







                    






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
