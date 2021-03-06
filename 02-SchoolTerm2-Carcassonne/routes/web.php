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

Route::get('/home', 'AccountController@profile' );

Route::get('countdown', 'TestController@response');

Route::get('error', 'TestController@error');

Route::get('news', 'HomeController@news')->name('news.index');
Route::get('faq', 'HomeController@faq');
Route::get('scores', 'HomeController@scores');
Route::get('admins', 'HomeController@admins');
Route::get('mail', 'HomeController@mail');
Route::get('judge', 'HomeController@judge');
Route::get('projects', 'ProjectsController@index');

Route::resource('/score/{tableid}/', 'ScoreInputController', [
    'except' => ['delete', 'show', 'store']
]);


Route::post('register', 'Auth\RegisterController@register');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/error', 'TestController@error');

Auth::routes();

Auth::routes(['verify' => true]);



// Check if any user is loged in
Route::group(['middleware' => 'auth'], function(){
    // Access for only the admin
    Route::group(['middleware' => ['admin']], function(){
        // admin dashboard
        Route::get('/admin', 'AdminController@index')->name('admin');
        Route::get('/admin/add', 'AdminController@create')->name('admin.add');

        // admin users
        Route::get('/admin/users/', 'AdminUserController@index')->name('admin.users');
        Route::get('/admin/judges/', 'AdminJudgeController@index')->name('admin.judges');

        Route::get('/admin/users/{id}', 'AdminUserController@details')->name('admin.users.show');
        Route::get('/admin/judges/{id}', 'AdminJudgeController@details')->name('admin.judges.show');

        Route::get('/admin/users/{id}/edit', 'AdminUserController@edit')->name('admin.users.edit');
        Route::get('/admin/judges/{id}/edit', 'AdminJudgeController@edit')->name('admin.judges.edit');

        Route::get('/admin/permissions', 'AdminController@permission')->name('admin.permissions');
        Route::post('/admin/permissions/{id}', 'AdminController@updatePermission')->name('admin.post.permissions');

        Route::post('/admin/users/{id}/edit', 'AdminUserController@update')->name('admin.post.users.edit');
        Route::post('/admin/judges/{id}/edit', 'AdminJudgeController@update')->name('admin.post.judges.edit');

        Route::post('/admin/add', 'AdminController@store')->name('admin.post.add');
        Route::resource('/admin/news', 'NewsController');

        Route::get('downloadExcel/{roleid}', 'ExcelController@downloadExcel')->name('excel.users');
    });
});
Route::get('/welcome', 'TestController@index');
Route::get('/profile', 'AccountController@profile')->name('home');
Route::get('/', 'AccountController@profile')->name('home');
Route::get('/judge', 'AccountController@judge');

Route::post('/register', 'Auth\RegisterController@register');

Route::resource('/judge','JudgeController');
Route::get('/tableSize', 'TempController@tableSize');
Route::get('/tournamentPoints', 'TempController@tournamentPoints');
Route::get('/points', 'TempController@points');
Route::get('/tablesPreliminaryRoundRandom', 'TempController@tablesPreliminaryRoundRandom');
Route::get('/tablesPreliminaryRoundFromPoints', 'TempController@tablesPreliminaryRoundFromPoints');
Route::get('/tablesKnockout', 'TempController@tablesKnockout');

// Routes voor de countdown timer create, pause, resume and reset
Route::post('/countdown', 'CountdownController@create');
Route::post('/cdpause', 'CountdownController@pause');
Route::post('/cdpause2', 'CountdownController@pause2');
Route::post('/cdresume', 'CountdownController@resume');
Route::post('/cdreset', 'CountdownController@reset');


Route::post('/generateRound', 'HomeController@generateTables');
Route::post('/gamePoints', 'HomeController@assignGamePoints');

Auth::routes(['verify' => true]);

