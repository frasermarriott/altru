@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')

<div id="wrap">

    <section class="profile-img-banner">
<div data-content="Change profile picture" class="image-overlay">
        <div class="profile-img"><img class="profile-pic" src="../img/uploads/profile-pics/{{$user->profile_img}}" alt="My profile picture"></div>
</div>
        <div class="banner-col-A banner-col-all"></div><div class="banner-col-B banner-col-all"></div><div class="banner-col-C banner-col-all"></div><div class="banner-col-D banner-col-all"></div><div class="banner-col-E banner-col-all"></div>

    </section>


<div class="container profile-container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default custom-panel">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">


@if($profiletype=='guest')







        <!-- About section -->
        <div class="col-lg-12">

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
                        {!! Form::textarea('about_me', $user->about_me, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Enter some information about yourself', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('about_me') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('additional_info') ? ' has-error' : '' }}">
                        {!! Form::label('additional_info', 'Additional information') !!}
                        {!! Form::textarea('additional_info', $user->additional_info, ['size' => '30x3', 'class' => 'form-control', 'placeholder' => 'Any other details you feel may be important', 'required' => 'required']) !!}
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
                        {!! Form::file('file', ['id' => 'file', 'class' => 'filestyle', 'data-buttonBefore' => 'true', 'data-iconName' => 'glyphicon glyphicon-picture', 'data-buttonName' => 'btn-upload', 'data-size' => 'sm', 'data-buttonText' => 'Upload photo']) !!}
                        <small class="text-danger">{{ $errors->first('file') }}</small>
                    </div>


                    <div class="form-group"> 
                        {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                    </div>
                    
                
                {!! Form::close() !!}


                
            </div>

        </div>
        



    


@elseif($profiletype=='volunteer') 




        <!-- About section -->
        <div class="col-lg-12">

            <div id="profile-about-txt">


                {!! Form::open(['method' => 'POST', 'route' => 'updateprofile', 'class' => 'form-horizontal', 'files' => true]) !!}

                    {!! Form::hidden('user_id', $user->user_id, ['required' => 'required']) !!}
                
                    <div class="form-group{{ $errors->has('family_name') ? ' has-error' : '' }}">
                        {!! Form::label('family_name', 'Family name') !!}
                        {!! Form::text('family_name', $user->family_name, ['class' => 'form-control', 'placeholder' => 'Enter your family name', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('family_name') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('about_family') ? ' has-error' : '' }}">
                        {!! Form::label('about_family', 'About our family') !!}
                        <p><small>Enter some information about what you can help to provide. Please include how many people you can accomodate and how long you are able to host for.</small></p>
                        {!! Form::textarea('about_family', $user->about_family, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Enter some information about what you can help to provide. Include how many people you can accomodate and how long you are able to host for.', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('about_family') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                        {!! Form::label('location', 'Location') !!}
                        {!! Form::text('location', $user->location, ['class' => 'form-control', 'placeholder' => 'Enter your location', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('location') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                        {!! Form::label('contact_email', 'Contact email') !!}
                        {!! Form::email('contact_email', $user->contact_email, ['class' => 'form-control', 'placeholder' => 'Enter your email address', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('contact_email') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                        {!! Form::label('contact_phone', 'Contact phone') !!}
                        {!! Form::text('contact_phone', $user->contact_phone, ['class' => 'form-control', 'placeholder' => 'Enter your phone number', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('contact_phone') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        {!! Form::file('file', ['id' => 'file', 'class' => 'filestyle', 'data-buttonBefore' => 'true', 'data-iconName' => 'glyphicon glyphicon-picture', 'data-buttonName' => 'btn-upload', 'data-size' => 'sm', 'data-buttonText' => 'Upload photo']) !!}
                        <small class="text-danger">{{ $errors->first('file') }}</small>
                    </div>


                    <div class="form-group"> 
                        {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                    </div>
                    
                
                {!! Form::close() !!}


                
            </div>

        </div>
        
    


@endif


                </div>
            </div>
        </div>
    </div>
</div>

</div><!--wrap-->
@endsection
