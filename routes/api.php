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

Route::group(['prefix' => 'jobs'], function(){
	Route::get('/', 'JobController@index');
	Route::get('/{job}', 'JobController@show');
	Route::middleware('auth:api')->post('/', 'JobController@store');
});

Route::group(['prefix' => 'samples'], function(){
	Route::get('/', 'SampleController@index');
	Route::get('/{sample}', 'SampleController@show');
	Route::middleware('auth:api')->post('/', 'SampleController@store');
});