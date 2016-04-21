@extends('layouts.app')

@section('title', 'Find a guest')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">Find someone to help in your area</div>

                <div class="panel-body">

                

                    <!-- placeholder form. Change to laravel format later -->
                    <form method="">

                        <div class="input-group has-feedback">

                            <input type="text" class="form-control hasclear" name="search" id="search" aria-label="search by location" value="{{$search_term}}" placeholder="Search by location" required>


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
                        <small><a href="{{ url('guests') }}">Show all</a> </small>
                    @endif




                {{--$current_user_location--}}

          
                    @foreach($guest_list as $guest)
                    <hr>
                            <p><strong class="search_location_label">

                            @if($guest->location == $current_user_location)
                                <span class="label label-success label-location">{{ ucwords($guest->location) }}</span>
                            @else
                                <span class="label label-info label-location">{{ ucwords($guest->location) }}</span>
                            @endif

                            </strong> - <strong> {{ ucwords($guest->first_name)}} </strong> <small>- {{ str_limit($guest->about_me, $limit = 100, $end='...')}}</small>

                            <a href="{{ route('view_guest', array('id' => $guest->user_id)) }}" class="btn btn-link link-to-profile">...read more</a></p> 
                            
                            
                    @endforeach

             

                    <!-- Display Pagination -->
                    {!! $guest_list->render() !!}
                        

                        
                    

                </div>
                        
                    

                </div>

            </div>
        </div>
    </div>
</div>




@endsection

