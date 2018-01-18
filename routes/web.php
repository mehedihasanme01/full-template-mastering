<?php

//Route::get('/', function () {
//    return view('frontEnd.home.homeContent');
//});

Route::get('/', [
   'uses' => 'HomeController@index',
   'as'   =>'/'
]);

Route::get('/category-products-women', [
    'uses' => 'HomeController@products',
    'as'   =>'/products'
]);

Route::get('/category-products-men', [
    'uses' => 'HomeController@products1',
    'as'   =>'/products1'
]);

Route::get('/short-codes', [
    'uses' => 'HomeController@codes',
    'as'   =>'/codes'
]);

Route::get('/mail-us', [
    'uses' => 'HomeController@mail',
    'as'   =>'/mailUs'
]);

Route::get('/check-out', [
    'uses' => 'HomeController@checkOut',
    'as'   =>'/checkOut'
]);

Route::get('/log-in', [
    'uses' => 'HomeController@logIn',
    'as'   =>'/logIn'
]);
Route::get('/register', [
    'uses' => 'HomeController@registerUser',
    'as'   =>'/registerUser'
]);
