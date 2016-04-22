@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div id="wrap">
<div id="centered">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 usertype-box">
            

               


                    <div class="col-md-6 col-sm-6 col-xs-6">


                        {!! Form::open(['route' => ['user_path']]) !!}
                        {!! Form::hidden('usertype', 'guest') !!}
                        {{ Form::button("<span class='glyphicon glyphicon-home usertype-icon'></span><br> <p class='usertype-txt'>I'm looking for a place to stay</p>", array('class'=>'btn btn-default btn-block btn-lg usertype-btn', 'type'=>'submit')) }}
                        {!! Form::close() !!}

                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6">

                        {!! Form::open(['route' => ['user_path']]) !!}
                        {!! Form::hidden('usertype', 'volunteer') !!}
                        {{ Form::button("<span class='glyphicon glyphicon-user usertype-icon'></span><br> <p class='usertype-txt'>I'd like to volunteer</p>", array('class'=>'btn btn-default btn-block btn-lg usertype-btn', 'type'=>'submit')) }}
                        {!! Form::close() !!}


                    </div>

          
        </div>
    </div>
</div>

</div>
</div>
@endsection
