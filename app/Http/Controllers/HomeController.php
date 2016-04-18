<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use Input;
// use App\Quotation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile()
    {
        // Set a variable to retrieve the logged in user's info from the 'guests' table (if they are a refugee) or the 'volunteers' table (if they are a volunteer) and pass it into the 'profile' view.
        $profiletype = Auth::user()->usertype;
        $current_user = Auth::user()->id;

        if($profiletype=='guest') {
            // Select row in the 'guests' table where 'user_id' is the same as the current logged-in user's id.
            $user = DB::table('guests')->where('user_id', '=', Auth::user()->id)->first();
            $profile_details_exist = DB::table('guests')->where('user_id', $current_user)->where('location', '=', '')->get();
        }

        elseif($profiletype=='volunteer') {
            $user = DB::table('families')->where('user_id', '=', Auth::user()->id)->first();
            $profile_details_exist = DB::table('families')->where('user_id', $current_user)->where('location', '=', '')->get();
        }


        return view('profile',['user'=>$user, 'profiletype'=>$profiletype, 'profile_details_exist' => $profile_details_exist]);
    }


    public function editprofile()
    {
        $profiletype = Auth::user()->usertype;
        $current_user = Auth::user()->id;

        if($profiletype=='guest') {
            $user = DB::table('guests')->where('user_id', '=', Auth::user()->id)->first();
        }

        elseif($profiletype=='volunteer') {
            $user = DB::table('families')->where('user_id', '=', Auth::user()->id)->first();
        }

        return view('edit-profile',['user'=>$user, 'profiletype'=>$profiletype, 'current_user' => $current_user]);
    }



    public function editprofileUpdate()
    {
        $profiletype = Auth::user()->usertype;
        $current_user = Auth::user()->id;

        if($profiletype=='guest') {
            DB::table('guests')->where('user_id', '=', $current_user)->update([
                'first_name' => Input::get('first_name'),
                'last_name' => Input::get('last_name'),
                'about_me' => Input::get('about_me'),
                'additional_info' => Input::get('additional_info'),
                'location' => Input::get('location'),
                'language' => Input::get('language'),
             ]);
        }
        elseif($profiletype=='volunteer') {
            DB::table('families')->where('user_id', '=', $current_user)->update([
                'family_name' => Input::get('family_name'),
                'about_family' => Input::get('about_family'),
                'location' => Input::get('location'),
                'contact_email' => Input::get('contact_email'),
                'contact_phone' => Input::get('contact_phone'),
            ]);
        }

        return redirect('profile')->with('success', 'Profile updated!');

    }


    // This is the page the user is directed to immediately after logging in
    public function dashboard()
    {
        // Creates a blank profile upon account creation when the user is directed to the dashboard. This is to prevent an error that occured when inserting the profile into the db table when first clicking on their profile page. 

        $profiletype = Auth::user()->usertype;
        $current_user = Auth::user()->id;

        // Check if user is guest or volunteer
        if($profiletype=='guest'){
            $user = DB::table('guests')->where('user_id', '=', Auth::user()->id)->first();
        }
        elseif($profiletype=='volunteer'){
            $user = DB::table('families')->where('user_id', '=', Auth::user()->id)->first();
        }

        // If the logged-in user does not exist in either database, create a blank entry for them in the table consisting of only their user_id.
        if($user === null){
            if($profiletype=='guest') {
                DB::table('guests')->insert(['user_id' => $current_user]);
            }
            elseif($profiletype=='volunteer'){
                DB::table('families')->insert(['user_id' => $current_user]);
            }
        }




        return view('dashboard');
    }

}
