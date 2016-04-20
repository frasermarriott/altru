@extends('layouts.app')

@section('title', 'Find a family')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading notranslate">Volunteers</div>

                <div class="panel-body">
                
      
          
                    @foreach($volunteer_list as $volunteer)
                    <hr>
                            <p>{{$volunteer->family_name}} <a href="{{ route('view_family', array('id' => $volunteer->user_id)) }}">more info</a></p> 
                            
                            <!-- <a href="@{{ route('connect_family', array('id' => $volunteer->user_id)) }}" class="btn btn-primary btn-xs">Edit</a> -->
                            
                    @endforeach

             

                    <!-- Display Pagination -->
                    {!! $volunteer_list->render() !!}
                        

                        
                    

                </div>
                        
                    

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
