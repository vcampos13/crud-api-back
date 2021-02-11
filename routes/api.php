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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('login', 'App\Http\Controllers\Api\AuthController@login');

Route::middleware('auth:api')->group(function(){
    Route::post('details', 'App\Http\Controllers\Api\AuthController@getUserDetailsInfo');
});

//App Menus
Route::get('/menus', 'App\Http\Controllers\Menus\AppMenusController@index');
Route::post('/menus', 'App\Http\Controllers\Menus\AppMenusController@store');
Route::get('/menus/{appMenus}', 'App\Http\Controllers\Menus\AppMenusController@show');
Route::put('/menus/{appMenus}', 'App\Http\Controllers\Menus\AppMenusController@update');
Route::delete('/menus/{appMenus}', 'App\Http\Controllers\Menus\AppMenusController@destroy');