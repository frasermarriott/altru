<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Input;

class FamiliesController extends Controller
{
    public function view_families()
    {
    	$volunteer_list = DB::table('families')->paginate(10);

    	return view('families', ['volunteer_list' => $volunteer_list]);
    }

    public function view_family($id)
    {
    	$family_id = DB::table('families')->value('user_id', '=', $id);

    	$family = DB::table('families')->where('user_id', $family_id)->first();

    	return view('family', ['family' => $family_id, 'family' => $family]);
    }
}
