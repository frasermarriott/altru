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

// Route::post('register/type', function() {
// 	return view('auth.register');
// });

Route::post('register/type', 'UsertypeController@usertype');

Route::auth();

Route::get('/profile', 'HomeController@profile');




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