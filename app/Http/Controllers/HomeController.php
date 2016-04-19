<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use Input;
use \Storage;
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



    public function editprofileUpdate(Request $request)
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

        if($request->hasFile('file')){
            $file = $request->file('file'); // Request file from the upload form.
            $allowed_file_types = config('app.allowed_file_types');
            $max_file_size = config('app.max_file_size');
            $rules = [
                'file' => 'mimes:'.$allowed_file_types.'|max:'.$max_file_size,
            ];
            $this->validate($request, $rules);
            $random_string = str_random(20); // Generate a random string to prepend to the filename, to prevent duplicate filenames.
            $file_name = ($random_string.'-'.($file->getClientOriginalName())); // Request the file name.
            $destination_path = config('app.file_destination_path').'/'.$file_name; // Set the destination.
            $uploaded = Storage::put($destination_path, file_get_contents($file->getRealPath()));

            // Insert filename into the database table for the logged in user.
            if($uploaded){

                if($profiletype=='guest') {

                    // Delete the user's previous profile picture
                    $image_exists = DB::table('families')->where('user_id', $current_user)->value('profile_img');
 
                    // Protect placeholder image from deletion.
                    if($image_exists == 'profile-placeholder-300x300.png'){
                        //
                    }
                    else{
                        Storage::delete(config('app.file_destination_path').'/'.$image_exists);
                    }

                    // Update the database with the image filename
                    DB::table('guests')->where('user_id', '=', $current_user)->update([
                        'profile_img' => $file_name,
                    ]);
                }
                elseif($profiletype=='volunteer') {


                    // Delete the user's previous profile picture
                    $image_exists = DB::table('families')->where('user_id', $current_user)->value('profile_img');
 
                    // Protect placeholder image from deletion.
                    if($image_exists == 'profile-placeholder-300x300.png'){
                        //
                    }
                    else{
                        Storage::delete(config('app.file_destination_path').'/'.$image_exists);
                    }
  
                    // Update the database with the image filename
                    DB::table('families')->where('user_id', '=', $current_user)->update([
                        'profile_img' => $file_name,
                    ]);
                }

            }
        }

        return redirect('profile')->with('success', 'Profile updated!');

    }



    // This is the page the user is directed to immediately after logging in
    public function dashboard()
    {
        // Creates a blank profile upon account creation when the user is directed to the dashboard. This is to prevent an error that occured when inserting the profile into the db table when first clicking on their profile page. 

        $profiletype = Auth::user()->usertype;
        $current_user = Auth::user()->id;

        // If admin, return the admin dashboard view.
        if($profiletype=='admin'){
            // return view('admin.admin-dashboard');
            return redirect()->route('admin-dashboard');
        }

        // Check if user is guest or volunteer
        if($profiletype=='guest'){
            $user = DB::table('guests')->where('user_id', '=', Auth::user()->id)->first();
            $profile_pic = DB::table('guests')->where('user_id', '=', Auth::user()->id)->whereNotNull('profile_img')->get();
        }
        elseif($profiletype=='volunteer'){
            $user = DB::table('families')->where('user_id', '=', Auth::user()->id)->first();
            $profile_pic = DB::table('families')->where('user_id', '=', Auth::user()->id)->whereNotNull('profile_img')->get();
        }

        // If the logged-in user does not exist in either database, create a blank entry for them in the table consisting of only their user_id.
        if($user === null){
            if($profiletype=='guest') {
                DB::table('guests')->insert(['user_id' => $current_user, 'profile_img' => 'profile-placeholder-300x300.png']);
            }
            elseif($profiletype=='volunteer'){
                DB::table('families')->insert(['user_id' => $current_user, 'profile_img' => 'profile-placeholder-300x300.png']);
            }
        }
  

        
        return view('dashboard');
        
    }

}
