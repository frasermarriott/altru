@extends('layouts.app')

@section('title', 'Edit User - Admin Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">Edit User Records - Admin Dashboard</div>

                <div class="panel-body">
                
              
               
                    <div class="col-lg-12">

                            <div id="profile-about-txt">


                                {!! Form::open(['method' => 'POST', 'route' => 'update-user', 'class' => 'form-horizontal']) !!}
                                
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        {!! Form::label('name', 'Username') !!}
                                        {!! Form::text('name', $user_to_edit->name, ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        {!! Form::label('email', 'Email address') !!}
                                        {!! Form::email('email', $user_to_edit->email, ['class' => 'form-control', 'placeholder' => 'Email address', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('usertype') ? ' has-error' : '' }}">
                                        {!! Form::label('usertype', 'Usertype') !!}
                                        {!! Form::text('usertype', $user_to_edit->usertype, ['class' => 'form-control', 'placeholder' => 'guest/volunteer', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('usertype') }}</small>
                                    </div>

                                    <div class="form-group{{ $errors->has('verified') ? ' has-error' : '' }}">
                                        {!! Form::label('verified', 'Verification status') !!}
                                        {!! Form::text('verified', $user_to_edit->verified, ['class' => 'form-control', 'placeholder' => 'yes/no', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('verified') }}</small>
                                    </div>

                                    <div class="form-group"> 
                                        {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                                    </div>
                                    
                                
                                {!! Form::close() !!}


                                
                            </div>

                        </div>
                        <!-- end form -->
                        

                        
                    

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
