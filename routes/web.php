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
Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});
Route::get('/', function () {
    return view('welcome');
})->name('login.show');
Route::get('/account', function () {
    return view('account');
});
Route::post('/', 'DashboardController@loginproses')->name('login.proses');

Route::group(['prefix' => 'admin', 'middleware' => 'isLogin'], function () {
    route::get('/{any}', function () {
        return view('dashboards');
    })->where('any', '.*');
});
