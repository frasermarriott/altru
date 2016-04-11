@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    Welcome, {{ ucwords(\Auth::user()->name) }}

                    <div id="About Me">
                        <h3>About Me</h3>
                        <a href="#">Edit</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
