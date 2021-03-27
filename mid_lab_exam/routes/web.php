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
    //return view('welcome');
    echo "welcome";
});


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');


Route::get('/registration', 'RegisterController@index')->name("registration");
Route::post('/registration', 'RegisterController@verify');
Route::get('/admin','AdminController@index');

Route::get('/logout', 'LogoutController@index');


Route::get('/customer', 'CustomerController@index');
Route::get('/scout', 'ScoutController@index');
Route::get('/general', 'GeneralController@index');
Route::get('/admin', 'AdminController@index');

Route::get('/sales', 'SalesController@index');
Route::get('/system/sales/physical_store', 'SalesController@physicalStore');
Route::get('/system/sales/virtual_store', 'SalesController@virtualStore');
Route::get('/system/sales/e-marketing', 'SalesController@emarketing');
//Route::get('/home', 'HomeController@index');

Route::group(['middleware'=> 'sess'], function(){
    Route::get('/home', ['uses'=>'HomeController@index']);
    
    Route::get('/home/create', 'HomeController@create')->middleware('sess')->name('home.create');
    Route::post('/home/create', 'HomeController@store');
    Route::get('/home/userlist', 'HomeController@userlist')->name('home.userlist');
    Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');

    Route::get('/home/profile', 'HomeController@userlist')->name('home.profile');

    Route::post('/home/edit/{id}', 'HomeController@update');
    Route::get('/home/delete/{id}', 'HomeController@delete');
    Route::post('/home/delete/{id}', 'HomeController@destroy');
    Route::get('/home/details/{id}', 'HomeController@show');
   
    Route::post('/home/edit/{id}', 'HomeController@update');
    Route::get('/home/delete/{id}', 'HomeController@delete');
    Route::post('/home/delete/{id}', 'HomeController@destroy');
    Route::get('/home/details/{id}', 'HomeController@show');

    
    //Route::get('/product/abc/{id}', 'ProductController@xyz');
});


