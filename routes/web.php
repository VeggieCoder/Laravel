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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'HomeController@index' );


Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');

Route::get('/error', 'TestController@error');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('welcome', 'TestController@index');
    });

});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/register', 'Auth\RegisterController@register');



