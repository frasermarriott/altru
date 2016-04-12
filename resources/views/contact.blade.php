@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container">


  <h1>Contact Us</h1>

  <ul>
      @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>

  {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

  <div class="form-group">
      {!! Form::label('name', 'Your Name') !!}
      {!! Form::text('name', null, 
          array('required', 
                'class'=>'form-control', 
                'placeholder'=>'Your name', 
                'autofocus')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('email', 'Your Email Address') !!}
      {!! Form::text('email', null, 
          array('required', 
                'class'=>'form-control', 
                'placeholder'=>'Your email address')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('message', 'Your Message') !!}
      {!! Form::textarea('message', null, 
          array('required', 
                'class'=>'form-control', 
                'placeholder'=>'Your message')) !!}
  </div>

  <div class="form-group">
      {{ Form::button("<span class='glyphicon glyphicon-envelope'></span>&nbsp; Contact Us", array('class'=>'btn btn-primary', 'type'=>'submit')) }}
  </div>
  {!! Form::close() !!}

</div>

@endsection