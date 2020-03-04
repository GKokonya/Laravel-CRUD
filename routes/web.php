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


//used to add asset
Route::resource('/asset', 'carController');

//display route
Route::get('/home','carController@show');

//delete route
Route::get('/delete/{id}','carController@delete');



//edit
Route::get('edit/{id}', 'carController@edit');


//update
Route::post('/update/{id}','carController@update');