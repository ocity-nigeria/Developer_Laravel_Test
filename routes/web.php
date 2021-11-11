<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', 'App\Http\Controllers\BlogController@search');

Route::post('/meal/create', 'App\Http\Controllers\MealController@create');
Route::get('/webhook', 'App\Http\Controllers\MealAgregatorAPIController@receiveWebHook');
