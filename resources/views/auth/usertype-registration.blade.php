@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">


                    <div class="col-md-6">


                        {!! Form::open(['route' => ['user_path']]) !!}
                        {!! Form::hidden('usertype', 'guest') !!}
                        {{ Form::button("<span class='glyphicon glyphicon-home'></span> I'm looking for a place to stay", array('class'=>'btn btn-default btn-block btn-lg', 'type'=>'submit')) }}
                        {!! Form::close() !!}

                    </div>

                    <div class="col-md-6">

                        {!! Form::open(['route' => ['user_path']]) !!}
                        {!! Form::hidden('usertype', 'volunteer') !!}
                        {{ Form::button("<span class='glyphicon glyphicon-user'></span> I'd like to volunteer", array('class'=>'btn btn-default btn-block btn-lg', 'type'=>'submit')) }}
                        {!! Form::close() !!}


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
