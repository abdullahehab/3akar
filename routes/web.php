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


Route::group(['middleware' => ['web','admin']] , function(){

        # admin panel prefix
        Route::prefix('adminpanel')->group(function (){

        #ajax data table route of users
        Route::get('/users/data', ['as' => 'adminpanel.users.data' , 'uses' => 'userController@anyData']);


        #admin panel route
        Route::get('','adminController@index');

        #users route
        Route::get('users/{id}/delete', 'userController@destroy'); // w da b2a b el resouce
        Route::resource('/users','userController');
        Route::post('/users/changepassword', 'userController@updatePassword');

        #site setting route
        Route::get('/sitesetting', 'siteSettingController@index');
        Route::post('/sitesetting', 'siteSettingController@store');

        #Bu routes
        Route::resource('/bu','buController');
        #ajax data table route of bu
        Route::get('/bu/data', ['as' => 'adminpanel.bu.data' , 'uses' => 'buController@anyData']);
        Route::get('bu/{id}/delete', 'buController@destroy'); // w da b2a b el resouce
    });



});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

