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

Route::apiResource('users', 'UserController');

Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@index');
    Route::get('/{id}', 'UserController@show');
});

Route::apiResource('mascotas', 'MascotaController');

Route::prefix('mascotas')->group(function () {
    Route::get('/', 'MascotaController@index');
    Route::get('/{id}', 'MascotaController@show');
});
