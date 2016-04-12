@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Welcome</div> -->

                <div class="panel-body">


                    <h1>Welcome to <span class="notranslate">Altru</span></h1>

                    <iframe src="https://drive.google.com/file/d/0B3gdZmotwdbZWnZkOHdGd1o1OTg/preview" width="100%" height="480"></iframe>

                    <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

                    <h2>What we do</h2>

                    <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

                    <!-- Chek if user is logged in, if not, display create account button -->
                    @if(\Auth::check())
                        
                    @else
                        <h3>Get Started</h3>
                        <a href="{{ url('/register/usertype') }}" class="btn btn-primary">Create your Profile</a>
                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
