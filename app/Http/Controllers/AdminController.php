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
    	return view('admin.edit-user', ['user_to_edit' => $user_to_edit]);
    }


    public function update_user()
    {
    	// use similar code as was used to update profile
    }

}
