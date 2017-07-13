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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/activation/{email}/{token}', 'UserController@userActivation')->name('activation');
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'namespace' => 'User'], function(){

    Route::get('/', 'AccountController@index')->name('accountIndex');
    Route::get('/change', 'AccountController@change')->name('accountChange');
    Route::get('/about', 'AccountController@about')->name('accountAbout');
    Route::post('/change', 'AccountController@update')->name('accountUpdate');
    Route::get('/questions', 'QuestionController@index')->name('questionIndex');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin'], 'namespace'=> 'Admin'],function () {

    Route::get('/dashboard', 'UsersController@dashboard');
});
