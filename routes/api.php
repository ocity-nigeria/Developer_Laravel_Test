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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blog', 'App\Http\Controllers\BlogController@search');

Route::post('/meal/create', 'App\Http\Controllers\MealController@create');
Route::get('/webhook', 'App\Http\Controllers\MealAgregatorAPIController@receiveWebHook');
