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

Route::domain('{account}.multi.dev')->group(function () {
    Route::get('/', function ($account) {
        dd($account);
    });
});

Route::get('/', function () {
    return "This will respond to all other '/' requests.";
});
/*
Route::group(['domain' => '{account}.multi.dev'], function () {
    Route::get('/', function () {
        return "This will respond to requests for 'admin.localhost/'";
    });
});

Route::get('/', function () {
    return "This will respond to all other '/' requests.";
});*/