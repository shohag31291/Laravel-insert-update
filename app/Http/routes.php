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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/about', function () {
    return view('welcome');
    return "About page";
});
Route::get('/search', function () {
    return view('course.search');
});

Route::resource('course','courseController');

/*influx start*/
// Route::get('/','basicCntroller@index');
Route::get('home','basicCntroller@index');
Route::get('/about-us','basicCntroller@about');
Route::get('/service','basicCntroller@service');
Route::get('/contact','basicCntroller@contact');


/*Route::resource('influx','UserController');*/
Route::resource('influx','UserController');
/*influx end*/


Route::get('/alluser', function () {
    return view('user');
});
Route::get('/alluser/{id}/{name}', function ($id,$name) {
    return 'user '.$id.$name;
})->where('id', '[0-9]+');;

Route::get('/upload', function(){
	return view('upload.upimage');
});
Route::post('upload', 'UploadController@upload');


Route::resource('image', 'ImageController'); 

Route::resource('cv', 'CviController'); 
Route::resource('test', 'TestController');
