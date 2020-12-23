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
    return view('saran.login');
});

Route::get('/saran', 'SaranController@saran');
Route::get('/success', 'SaranController@success');

Route::get('/admin', 'SaranController@login_admin');
Route::get('/logout', 'SaranController@logout');

Route::POST('/tes', 'SaranController@get_api');
Route::POST('/admin_check', 'SaranController@login_check');
Route::POST('/insert', 'SaranController@insert_saran');
Route::middleware('session.has.user')->group(function () {
    Route::any('/data', "SaranController@admin");
});
