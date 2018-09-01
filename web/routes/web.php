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
Route::get('/2fa/enable', 'Google2FAController@enableTwoFactor');
Route::get('/2fa/disable', 'Google2FAController@disableTwoFactor');
Route::get('/2fa/validate', 'Auth\AuthController@getValidateToken');
Route::post('/2fa/validate', ['middleware' => 'throttle:5', 'uses' => 'Auth\AuthController@postValidateToken']);
Route::get('/', 'HomeController@index');

Route::prefix('file')->group(function () {
    Route::get('/', 'FileController@index');
    Route::get('/upload', 'FileController@uploadform');
    Route::post('/upload', 'FileController@upload');
    Route::get('/testFile', 'FileController@testFile');
    Route::get('/download/{id}','FileController@download');
    Route::get('/delete/{id}','FileController@delete');
});
Route::get('/timeline','PostController@timeline');

Route::prefix('plist')->group(function () {
    Route::get('/create','PlistController@createPlist');
});

Route::prefix('test')->group(function () {
    Route::get('/jstophp','TestController@jstophp');
    Route::get('/jscallphpfunction','TestController@jscallphpfunction');
    
});

// use api

Route::prefix('freshdesk')->group(function () {
    Route::get('/','FreshdeskAPIController@index');
    Route::get('/create-contract','FreshdeskAPIController@createContract');
    Route::get('/create-company','FreshdeskAPIController@createCompany');
});
    
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/firebase','FirebaseController@test');

Route::get('/testbranchdev','FirebaseController@test');
