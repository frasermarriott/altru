@extends('layouts.app')

@section('title', 'User Type')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">


                    <div class="col-md-6">

                        <form action="{{ url('/register/type') }}" method="POST">
                        {!! csrf_field() !!}
                            <input type="hidden" value="guest" name="usertype">
                            <input type="submit" class="btn btn-default" value="I'm looking for a place to stay"></a>
                        </form>

                    </div>

                    <div class="col-md-6">
                        <form action="{{ url('/register') }}" method="GET">
                            <input type="hidden" value="volunteer" name="usertype">
                            <input type="submit" class="btn btn-default" value="I'm volunteering a place to stay"></a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
