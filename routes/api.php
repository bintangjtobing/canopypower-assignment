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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sites', 'DashboardController@getSite');
Route::get('/sites/{siteid}', 'DashboardController@getSiteid');
Route::get('/list-sites', 'DashboardController@getList');
Route::delete('/list-sites/{siteid}', 'DashboardController@deletesite');
Route::get('/get-plan', 'DashboardController@getPlan');
Route::post('/sites/update/{site}', 'DashboardController@updatesite');
