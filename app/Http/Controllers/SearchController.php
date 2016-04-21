<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function autocomplete(){
		$term = Input::get('term');
		
		$results = array();
		
		$queries = DB::table('families')
			->where('location', 'LIKE', '%'.$term.'%')
			->take(10)->get();
		
		foreach ($queries as $query)
		{
		    $results[] = [ 'id' => $query->id, 'value' => $query->location.' '.$query->family_name ];
		}

		return Response::json($results);
	}
}
