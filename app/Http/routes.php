<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register/usertype', function () {
    return view('auth.usertype-registration');
});

// Registration page with post data from the usertype selection page.
Route::post('register/new', ['as' => 'user_path', 'uses' => 'UsertypeController@usertype']);

Route::auth();

Route::get('/profile', 'HomeController@profile');

Route::get('/profile/edit', 'HomeController@editprofile');

// This is the page the user is directed to immediately after logging in
Route::get('/dashboard', 'HomeController@dashboard');






// Families database test

Route::get('families', function(){
	$families = App\Families::all();
	foreach ($families as $family) {
		echo $family->family_name . "<br>";
	}
});

Route::get('families/{id}', function($id){
	$family = App\Families::find($id);
	echo $family->family_name;
});