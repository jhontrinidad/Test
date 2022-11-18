<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('sample_tables', 'SampleController@index')->name('sample_tables');
//Route::post('sample_tables', 'SampleController@store')->name('sample_tables');

//Route::resource('products', 'ProductController');
Route::resource('sample_tables', 'SampleController');

