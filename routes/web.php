<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

########################

## Admin Routes ##

########################
Route::group(['middleware' => ['web','admin']] , function(){
    Route::get('/adminpanel/users/data', ['as' => 'adminpanel.users.data' , 'uses' => 'userController@anyData']);
    Route::get('/adminpanel','adminController@index');
    Route::resource('/adminpanel/users','userController');
    Route::get('adminpanel/users/{id}/delete', 'userController@destroy'); // w da b2a b el resouce
    Route::post('adminpanel/users/changepassword', 'userController@updatePassword');


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

