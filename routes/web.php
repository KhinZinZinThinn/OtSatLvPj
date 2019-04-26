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

Route::get('/login',[
    'uses'=>'AuthController@getLogin',
    'as'=>'login'
]);

Route::get('/register',[
    'uses'=>'AuthController@getRegister',
    'as'=>'register'
]);

Route::post('/register',[
    'uses'=>'AuthController@postRegister',
    'as'=>'register'
]);

Route::post('/login',[
    'uses'=>'AuthController@postLogin',
    'as'=>'login'
]);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('/dashboard',[
        'uses'=>'AdminController@getDashboard',
        'as'=>'dashboard'
    ]);//->Middleware("auth");
});


Route::get('/logout',[
    'uses'=>'AdminController@getLogout',
    'as'=>'logout'
]);
