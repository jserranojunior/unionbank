<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'users'
], function ($router) {
    Route::post('/register', 'Auth\NewRegisterController@create');
    Route::post('/login', 'Auth\NewLoginController@login');
});
