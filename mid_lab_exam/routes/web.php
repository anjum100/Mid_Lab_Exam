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
Route::get('/specialist', 'SpecialistController@index');

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

    Route::get('/admin/create', 'AdminController@create')->middleware('sess')->name('home.create');
    Route::post('/admin/create', 'AdminControlle@store');
    Route::get('/admin/userlist', 'AdminControlle@userlist')->name('admin.userlist');
    Route::get('/admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
    Route::post('/admin/edit/{id}', 'AdminController@update');
    Route::get('/admin/delete/{id}', 'AdminController@delete');
    Route::post('/admin/delete/{id}', 'AdminController@destroy');
    Route::get('/admin/details/{id}', 'AdminControlle@show');


    Route::get('/customer/create', 'CustomerController@create')->middleware('sess')->name('customer.create');
    Route::post('/customer/create', 'CustomerControlle@store');
    Route::get('/customer/userlist', 'CustomerControlle@userlist')->name('customer.userlist');
    Route::get('/customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
    Route::post('/customer/edit/{id}', 'CustomerController@update');
    Route::get('/customer/delete/{id}', 'CustomerController@delete');
    Route::post('/customer/delete/{id}', 'CustomerController@destroy');
    Route::get('/customer/details/{id}', 'CustomerControlle@show');




    Route::get('/specialist /create', 'SpecialistController@create')->middleware('sess')->name('specialist.create');
    Route::post('/specialist /create', 'SpecialistController@store');
    Route::get('/specialist /userlist', 'SpecialistController@userlist')->name('specialist.userlist');
    Route::get('/specialist /edit/{id}', 'SpecialistController@edit')->name('specialist.edit');
    Route::post('/specialist /edit/{id}', 'SpecialistController@update');
    Route::get('/specialist /delete/{id}', 'SpecialistController@delete');
    Route::post('/specialist /delete/{id}', 'SpecialistController@destroy');
    Route::get('/specialist /details/{id}', 'SpecialistController@show');

    Route::get('/accountant/create', 'AccountantController@create')->middleware('sess')->name('accountant.create');
    Route::post('/accountant/create', 'AccountantControlle@store');
    Route::get('/accountant/userlist', 'AccountantControlle@userlist')->name('accountant.userlist');
    Route::get('/accountant/edit/{id}', 'AccountantController@edit')->name('accountant.edit');
    Route::post('/accountant/edit/{id}', 'AccountantController@update');
    Route::get('/accountant/delete/{id}', 'AccountantController@delete');
    Route::post('/accountant/delete/{id}', 'AccountantController@destroy');
    Route::get('/accountantr/details/{id}', 'AccountantControlle@show');

    Route::resource('/product', 'ProductController');
    //Route::get('/product/abc/{id}', 'ProductController@xyz');
});


