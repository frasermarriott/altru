<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsertypeController extends Controller
{
    public function usertype()
    {
    	return view('auth.register');
    }
}
