<?php

use Illuminate\Http\Request;

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

/*

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/
/*
Route::get('/', function () {
    return redirect('api');
});
*/

Route::group(['prefix' => 'v1'], function () {

    Route::get('/', function () {

        return response()->json(['message' => 'Pluft API', 'status' => 'Connected']);

    });

    Route::resource('slots', 'SlotsController');
    Route::resource('companies', 'CompaniesController');
    Route::resource('clients', 'ClientsController');

});



//Route::post('auth/login', 'AuthController@authenticate');
