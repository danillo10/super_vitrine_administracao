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


// Route::group(['middleware'=>'jwt.auth'] , function() { 
//     Route::resource('dashboard','DashboardController');
//     Route::resource('clientes','ClienteController');
//     Route::resource('produtos','ProdutoController');
//     Route::resource('categorias','CategoriaController');
//     Route::resource('subcategorias','SubCategoriaController');
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
