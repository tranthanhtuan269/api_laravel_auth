<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'RegisterController@register');

Route::group(['prefix' => 'topics'], function(){
	Route::get('/', 'TopicController@index');
	Route::get('/{topic}', 'TopicController@show');
	Route::middleware('auth:api')->post('/', 'TopicController@store');
});