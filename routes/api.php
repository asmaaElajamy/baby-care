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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('/register','userController@insert');
Route::post('/login','userController@index');
Route::middleware('auth:api')->post('/logout','userController@logout');
Route::post('/addbaby','babyController@insert');
Route::get('/babyinfo/{user_id}','babyController@getbabyinfo');
Route::get('/doctor','doctorController@doctor');
Route::put('/updateBabyInfo/{id}','babyController@update');
Route::delete('/delete/{id}','userController@deleteUser');
Route::delete('/deletebaby/{id}','babyController@deleteBaby');
Route::get('/type/{food_id}','typeController@getType');
Route::post('/upload/{id}','imageController@imageSave');
Route::get('/download/{id}','imageController@imagedownload');


