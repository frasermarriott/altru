@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">


@if($profiletype=='guest')




<div class="row">

                        <!-- Profile Picture -->
                        <div class="col-lg-5">

                            <div id="profile-image">Change image
                            <img src="img/profile-pics/{{$user->profile_img}}">
                            </div>

                        </div>

                        <!-- About section -->
                        <div class="col-lg-6">

                            <div id="profile-about-txt">


                                {!! Form::open(['method' => 'POST', 'route' => 'updateprofile', 'class' => 'form-horizontal', 'files' => true]) !!}
                                
                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        {!! Form::label('first_name', 'First name') !!}
                                        {!! Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' => 'Enter your first name', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('first_name') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        {!! Form::label('last_name', 'Surname') !!}
                                        {!! Form::text('last_name', $user->last_name, ['class' => 'form-control', 'placeholder' => 'Enter your last name', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('last_name') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('about_me') ? ' has-error' : '' }}">
                                        {!! Form::label('about_me', 'About me') !!}
                                        {!! Form::text('about_me', $user->about_me, ['class' => 'form-control', 'placeholder' => 'Enter some information about yourself', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('about_me') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('additional_info') ? ' has-error' : '' }}">
                                        {!! Form::label('additional_info', 'Additional information') !!}
                                        {!! Form::text('additional_info', $user->additional_info, ['class' => 'form-control', 'placeholder' => 'Any other details you feel may be important', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('additional_info') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                        {!! Form::label('location', 'Location') !!}
                                        {!! Form::text('location', $user->location, ['class' => 'form-control', 'placeholder' => 'Enter your location', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('location') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                                        {!! Form::label('language', 'Spoken language(s)') !!}
                                        {!! Form::text('language', $user->language, ['class' => 'form-control', 'placeholder' => 'Enter your spoken languages', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('language') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                        {!! Form::file('file') !!}
                                        <small class="text-danger">{{ $errors->first('file') }}</small>
                                    </div>


                                    <div class="form-group"> 
                                        {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                                    </div>
                                    
                                
                                {!! Form::close() !!}


                                
                            </div>

                        </div>
                        
                    </div>


    


@elseif($profiletype=='volunteer') 


                    <div class="row">

                        <!-- Profile Picture -->
                        <div class="col-lg-5">

                            <div id="profile-image">Change image
                            <img src="img/profile-pics/{{$user->profile_img}}">
                            </div>

                        </div>

                        <!-- About section -->
                        <div class="col-lg-6">

                            <div id="profile-about-txt">


                                {!! Form::open(['method' => 'POST', 'route' => 'updateprofile', 'class' => 'form-horizontal', 'files' => true]) !!}
                                
                                    <div class="form-group{{ $errors->has('family_name') ? ' has-error' : '' }}">
                                        {!! Form::label('family_name', 'Family name') !!}
                                        {!! Form::text('family_name', $user->family_name, ['class' => 'form-control', 'placeholder' => 'Enter your family name', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('family_name') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('about_family') ? ' has-error' : '' }}">
                                        {!! Form::label('about_family', 'About our family') !!}
                                        {!! Form::text('about_family', $user->about_family, ['class' => 'form-control', 'placeholder' => 'Enter some information about what you can help to provide', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('about_family') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                        {!! Form::label('location', 'Location') !!}
                                        {!! Form::text('location', $user->location, ['class' => 'form-control', 'placeholder' => 'Enter your location', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('location') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                        {!! Form::label('contact_email', 'Contact email') !!}
                                        {!! Form::text('contact_email', $user->contact_email, ['class' => 'form-control', 'placeholder' => 'Enter your email address', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('contact_email') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                        {!! Form::label('contact_phone', 'Contact phone') !!}
                                        {!! Form::number('contact_phone', $user->contact_phone, ['class' => 'form-control', 'placeholder' => 'Enter your phone number', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('contact_phone') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                        {!! Form::file('file') !!}
                                        <small class="text-danger">{{ $errors->first('file') }}</small>
                                    </div>

                                    <div class="form-group"> 
                                        {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                                    </div>
                                    
                                
                                {!! Form::close() !!}


                                
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
