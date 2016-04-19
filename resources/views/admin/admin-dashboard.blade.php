@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">Admin Dashboard</div>

                <div class="panel-body">
                
                    
                    <div class="table-responsive">

                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Usertype</th>
                                <th>Verified</th>
                                <th>Edit</th>
                              </tr>
                            </thead>
                            <tbody>

                            <!-- Loop through the users table and display the relevant information inside a table -->
                                @foreach($user_list as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ucwords($user->usertype)}}</td>
                                        @if($user->verified=='yes')
                                            <td class="success">{{ucwords($user->verified)}}</td>
                                        @elseif($user->verified=='no')
                                            <td class="danger">{{ucwords($user->verified)}}</td>
                                        @endif
                                        
                                        <td><a href="{{ route('edit-user', array('id' => $user->id)) }}" class="btn btn-primary btn-xs">Edit</a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                          </table>

                    </div>

                    <!-- Display Pagination -->
                    {!! $user_list->render() !!}
                        

                        
                    

                </div>

            </div>
        </div>
    </div>
</div>
@endsection