<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Input;

class GuestsController extends Controller
{
    public function view_guests(Request $request)
    {
        // Restrict access to users who are not verified.
        if(Auth::check()==null){
            return redirect('/')->with('verification_error', 'Sorry, you can not access this page as you are not logged in.');
        }
        elseif(Auth::check()){
            if(Auth::user()->verified!=='yes'){
                return redirect('/')->with('verification_error', 'Sorry, you can not yet access this page as your account has not been verified by our team');
            }
            elseif(Auth::user()->usertype=='guest'){
                return redirect('/families');
            }
        }

        // Get search term 
        $search_term = $request->search;

        // If a search term exists, query the database for the search term.
        if($search_term) {
            $guest_list = DB::table('guests')->where('location', 'LIKE', '%'.$search_term.'%')->whereExists(function ($query) {
                $query->select(DB::raw('id'))
                      ->from('users')
                      ->whereRaw('users.id = guests.user_id')->where('verified', '=', 'yes'); })->paginate(5);
        }
        else{

        // List all guests that have a completed profile and a verified account.
    	$guest_list = DB::table('guests')->where('location', '!=', '')->whereExists(function ($query) {
                $query->select(DB::raw('id'))
                      ->from('users')
                      ->whereRaw('users.id = guests.user_id')->where('verified', '=', 'yes'); })->paginate(5);
        }

        // Check if user is logged in, if so, get their location.
        if(Auth::check()){
            $current_user_location = DB::table('families')->where('user_id', '=', Auth::user()->id)->value('location');
        }
        else {
            $current_user_location = "notset";
        }

    	return view('guests', ['guest_list' => $guest_list, 'current_user_location' => $current_user_location, 'search_term' => $search_term]);
    }

    public function view_guest(Request $id)
    {
        // Restrict access to users who are not verified.
        if(Auth::check()==null){
            return redirect('/')->with('verification_error', 'Sorry, you can not access this page as you are not logged in.');
        }
        elseif(Auth::check()){
            if(Auth::user()->verified!=='yes'){
                return redirect('/')->with('verification_error', 'Sorry, you can not yet access this page as your account has not been verified by our team');
            }
            elseif(Auth::user()->usertype=='guest'){
                return redirect('/families');
            }
        }
        

        // Request id from the url
        $get_guest_id = $id->id;

        // Query the database for results where user_id = the id specified in the url.
        $guest = DB::table('guests')->where('user_id', '=', $get_guest_id)->first();

        // Return the guest page with the relevant information.
        return view('guest', ['get_guest_id' => $get_guest_id, 'guest' => $guest]);
    }
}
