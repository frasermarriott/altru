@extends('layouts.app')

@section('title', 'Find a family')

@section('content')
<div id="wrap">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">{{ ucwords($family->family_name) }}</div>

                <div class="panel-body">

                    <ol class="breadcrumb">
                      <li><a href="{{ url('dashboard') }}">My Dashboard</a></li>
                      <li><a href="{{URL::previous()}}">Volunteers</a></li>
                      <li class="active">{{ ucwords($family->family_name) }}</li>
                    </ol>

                    <hr>
    

                    <div class="row">

                        <!-- Profile Picture -->
                        <div class="col-lg-5">

                            <div id="profile-image">
                                <img class="profile-pic-square" src="../img/uploads/profile-pics/{{$family->profile_img}}">
                            </div>

                        </div>

                        <!-- About section -->
                        <div class="col-lg-6">

                            <div id="profile-about-txt">

                                    <h1 class="notranslate">{{ ucwords($family->family_name) }}</h1> <hr>
                                    <h4>What we can do to help:</h4>
                                    <p>{{ $family->about_family }}</p> <hr>

                                    <h4>Location</h4>
                                    <p class="notranslate"><strong>{{ ucwords($family->location) }}</strong></p> <hr>

                                    <h4>Contact</h4>
                                    <p><strong>Email:</strong> {{ $family->contact_email }}</p>
                                    <p><strong>Phone:</strong> {{ $family->contact_phone }}</p>
                         

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
