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

Auth::routes();

Route::resource('posts', 'PostController');

// Route::group(['middleware' => 'subdomain', 'domain' => 'subdomain.{domain}.{tld}'], function () {
    
//     Route::get('/', function () {
//         dd(func_get_args()); //no args, because it was removed in the middleware
//     });
    
// });

Route::get('/martin', function () {
    return view('portfolio/index');
});