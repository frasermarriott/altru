@extends('layouts.app')

@section('title', 'Find a family')

@section('content')
<div id="wrap">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">Find a place to stay</div>

                <div class="panel-body">

                    <ol class="breadcrumb">
                      <li><a href="{{ url('dashboard') }}">My Dashboard</a></li>
                      <li class="active">Volunteers</li>
                    </ol>
                

                    <!-- placeholder form. Change to laravel format later -->
                    <form method="">

                        <div class="input-group has-feedback">

                            <input type="text" class="form-control hasclear" name="search" id="search" aria-label="search by location" value="{{$search_term}}" placeholder="Search by location" required autofocus>


                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default search-btn" value="Search"></input>
                            </span>

                        </div>

                    </form>
                    <!-- /plcaeholder form -->


                    <!-- Display search term -->
                    @if($search_term)
                        <br>
                        <p><small>Showing results for <strong>"{{ ucwords($search_term) }}"</strong></small></p>
                        <small><a href="{{ url('families') }}">Show all</a> </small>
                    @endif




                {{--$current_user_location--}}

          {{--
                    @foreach($volunteer_list as $volunteer)
                    <hr>
                            <p><strong class="search_location_label">

                            @if($volunteer->location == $current_user_location)
                                <span class="label label-location label-custom-green">{{ ucwords($volunteer->location) }}</span>
                            @else
                                <span class="label label-location label-custom-amber">{{ ucwords($volunteer->location) }}</span>
                            @endif

                            </strong> - <strong> {{ ucwords($volunteer->family_name)}} </strong> <small>- {{ str_limit($volunteer->about_family, $limit = 100, $end='...')}}</small>

                            <a href="{{ route('view_family', array('id' => $volunteer->user_id)) }}" class="btn btn-link link-to-profile">...read more</a></p> 
                            
                            
                    @endforeach

            --}}

            <br>
                    @foreach($volunteer_list as $volunteer)

                        @if($volunteer->location == $current_user_location)
                            <div class="panel panel-success">
                        @else
                            <div class="panel panel-info">
                        @endif

                                <div class="panel-heading">{{ ucwords($volunteer->location) }}</div>

                                <div class="panel-body">

                                    <div class="row">

                                        <!-- PROFILE IMAGE -->
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                                            <div class="profile-thumbnail-container">
                                                <img src="img/uploads/profile-pics/{{ $volunteer->profile_img }}" class="profile-thumbnail" alt="{{ ucwords($volunteer->family_name)}}'s Profile picture."> 
                                            </div>

                                        </div><!--col-->

                                        <!-- ABOUT TEXT -->
                                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">

                                            <strong>{{ ucwords($volunteer->family_name)}}</strong>

                                            <p>{{ str_limit($volunteer->about_family, $limit = 250, $end='...')}}</p>

                                            <p><a href="{{ route('view_family', array('id' => $volunteer->user_id)) }}" class="btn btn-default btn-sm">Visit profile</a></p> 

                                        </div><!--col-->

                                    </div><!--row-->

                                </div>

                            </div>



                    @endforeach








                    <!-- Display Pagination -->
                    {!! $volunteer_list->render() !!}
                        

                        
                    

                </div>
                        
                    

                </div>

            </div>
        </div>
    </div>
</div>


</div>
@endsection

