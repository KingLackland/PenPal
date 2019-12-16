<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('v1/auth/register', 'Api\v1\AuthController@register');
Route::post('v1/auth/login', 'Api\v1\AuthController@authenticate');
Route::get('/v1/auth/signup/activate/{token}', 'AuthController@signupActivate');

Route::get('v1/auth/logout', 'Api\v1\AuthController@logout')->middleware('auth:api');
Route::get('v1/auth/user', 'Api\v1\AuthController@user')->middleware('auth:api');
Route::resource('v1/user', 'Api\v1\UserController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']])->middleware('auth:api');
Route::resource('v1/tag', 'Api\v1\TagController')->middleware('auth:api');

Route::post('v1/auth/create', 'PasswordResetController@create')->middleware('auth:api');
Route::get('v1/auth/find/{token}', 'PasswordResetController@find')->middleware('auth:api');
Route::post('v1/auth/reset', 'PasswordResetController@reset')->middleware('auth:api');
