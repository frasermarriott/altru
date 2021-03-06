<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Input;

class FamiliesController extends Controller
{
    public function view_families(Request $request)
    {
        // Restrict access to users who are not verified.
        if(Auth::check()==null){
            return redirect('/')->with('verification_error', 'Sorry, you can not access this page as you are not logged in.');
        }
        elseif(Auth::check()){
            if(Auth::user()->verified!=='yes'){
                return redirect('/')->with('verification_error', 'Sorry, you can not yet access this page as your account has not been verified by our team');
            }

            elseif(Auth::user()->usertype=='volunteer'){
                return redirect('/guests');
            }
        }

        // Get search term 
        $search_term = $request->search;

        // If a search term exists, query the database for the search term.
        if($search_term) {
            $volunteer_list = DB::table('families')->where('location', 'LIKE', '%'.$search_term.'%')->whereExists(function ($query) {
                $query->select(DB::raw('id'))
                      ->from('users')
                      ->whereRaw('users.id = families.user_id')->where('verified', '=', 'yes'); })->paginate(5);
        }
        else{

        // List all families that have a completed profile and a verified account.
    	$volunteer_list = DB::table('families')->where('location', '!=', '')->whereExists(function ($query) {
                $query->select(DB::raw('id'))
                      ->from('users')
                      ->whereRaw('users.id = families.user_id')->where('verified', '=', 'yes'); })->paginate(5);
        }

        // Check if user is logged in, if so, get their location.
        if(Auth::check()){
            $current_user_location = DB::table('guests')->where('user_id', '=', Auth::user()->id)->value('location');
        }
        else {
            $current_user_location = "notset";
        }

    	return view('families', ['volunteer_list' => $volunteer_list, 'current_user_location' => $current_user_location, 'search_term' => $search_term]);
    }

    public function view_family(Request $id)
    {
        // Restrict access to users who are not verified.
        if(Auth::check()==null){
            return redirect('/')->with('verification_error', 'Sorry, you can not access this page as you are not logged in.');
        }
        elseif(Auth::check()){
            if(Auth::user()->verified!=='yes'){
                return redirect('/')->with('verification_error', 'Sorry, you can not yet access this page as your account has not been verified by our team');
            }
            elseif(Auth::user()->usertype=='volunteer'){
                return redirect('/guests');
            }
        }

        

        // Request id from the url
        $get_volunteer_id = $id->id;

        // Query the database for results where user_id = the id specified in the url.
        $family = DB::table('families')->where('user_id', '=', $get_volunteer_id)->first();

        // Return the family page with the relevant information.
        return view('family', ['get_volunteer_id' => $get_volunteer_id, 'family' => $family]);
    }
}
