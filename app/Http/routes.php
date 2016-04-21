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

// Route::get('/profile', 'HomeController@profile');
Route::get('/profile', ['as' => 'profile', 'uses' => 'HomeController@profile']);

Route::get('/profile/edit', ['as' => 'editprofile', 'uses' => 'HomeController@editprofile']);

Route::post('/profile/edit/update', ['as' => 'updateprofile', 'uses' =>'HomeController@editprofileUpdate']);

// This is the page the user is directed to immediately after logging in
Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@dashboard']);


// Admin
Route::get('/admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'AdminController@dashboard']);

Route::get('/edit-user/{id}', ['as' => 'edit-user', 'uses' => 'AdminController@edit_user']);

Route::post('/update-user', ['as' => 'update-user', 'uses' => 'AdminController@update_user']);


// Contact Form
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactController@store']);


// Families
Route::get('/families', ['as' => 'view_families', 'uses' => 'FamiliesController@view_families']);

Route::get('/families/{id}', ['as' => 'view_family', 'uses' => 'FamiliesController@view_family']);




