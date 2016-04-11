<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UsertypeController extends Controller
{

	public function usertype()
	{
		// Gets all input data from the submitted form
	    $input = Input::get();

	    //Selects only the usertype field and sets it as a variable
	    $usertype = $input['usertype'];

	    //Display the registration page and pass through the usertype variable
	    return view('auth.register')->with('usertype', $usertype);
	}


}
