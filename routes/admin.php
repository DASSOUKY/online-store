<?php

use App\Http\Controllers\Front\FirstController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/admin/{name}', function ($name) {
    return 'Welcome ' . $name;
});

// Route::group(['namespace' => 'Front'], function() {
//     Route::get('a', 'FirstController@login');
//     Route::get('b', 'FirstController@logout');
// });
