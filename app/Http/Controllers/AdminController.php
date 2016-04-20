<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Input;

class AdminController extends Controller
{
    public function dashboard ()
    {
    	$user_list = DB::table('users')->paginate(10);

    	return view('admin.admin-dashboard', ['user_list' => $user_list]);
    }


    public function edit_user(Request $id)
    {
    	$get_user_id = $id->id;
    	$user_to_edit = DB::table('users')->where('id', '=', $get_user_id)->first();
    	return view('admin.edit-user', ['user_to_edit' => $user_to_edit, 'get_user_id' => $get_user_id]);
    }


    public function update_user(Request $id)
    {

    	$get_user_id = $id->id;

    	// Validation rules
    	$rules = [
    			'name'  => 'required|unique:users,name,'.$get_user_id, // Where name is unique to the user's id
                'email' => 'required|email|unique:users,email,'.$get_user_id, // Where email is unique to the user's id
                'usertype' => 'required',
                'verified' => 'required',
        ];

        // Validate
        $this->validate($id, $rules);

        // Update users table with input from the edit-user form
    	DB::table('users')->where('id', '=', $get_user_id)->update([
    		'name' => Input::get('name'),
    		'email' => Input::get('email'),
    		'usertype' => Input::get('usertype'),
    		'verified' => Input::get('verified'),
    	]);

    	return redirect('admin-dashboard');
    }

}
