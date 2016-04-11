@extends('layouts.app')

@section('title', 'My Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ ucwords(\Auth::user()->name) }}'s Dashboard</div>

                <div class="panel-body">
                
                    
                        <!-- [[ PLACEHOLDER IMAGE MOCKUP ]] -->
                        <img src="img/mockup-grid.png" style="width: 600px; margin: 0 auto; display: block;">
                        
                    

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
