<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Response;
use Input;

class SearchController extends Controller
{
	public function autocomplete(){
		$term = Str::lower(Input::get('term'));
		
		$results = array();
		
		
		$queries = DB::table('families')->where('location', 'LIKE', '%'.$term.'%')->get();
		
		foreach ($queries as $query)
		{
			 $results[] = [ 'id' => $query->id, 'location' => $query->location];
		}

		return Response::json($results);
	}
}








		
