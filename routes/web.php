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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'roles','roles'=>'admins'],function(){
    Route::resource('users','AdminUsersController');
    Route::resource('foods','AdminFoodController');
    Route::resource('doctors','addDoctorController');
});

Route::get('/upload',['uses'=>'UploadController@index','middleware'=>'roles','roles'=>['admins','users']])->name('upload');
Route::post('/upload',['uses'=>'UploadController@upload','middleware'=>'roles','roles'=>['admins','users']])->name('upload.save');

Route::get('/add',['uses'=>'addDoctorController@insert','middleware'=>'roles','roles'=>['admins','users']])->name('add');
Route::post('/add',['uses'=>'addDoctorController@add','middleware'=>'roles','roles'=>['admins','users']])->name('add.save');

Route::get('/edit/{id}',['uses'=>'addDoctorController@edit','middleware'=>'roles','roles'=>['admins','users']])->name('edit');
Route::put('/edit/{id}',['uses'=>'addDoctorController@update','middleware'=>'roles','roles'=>['admins','users']])->name('edit.update');

Route::delete('/delete/{id}',['uses'=>'addDoctorController@destroy','middleware'=>'roles','roles'=>['admins','users']])->name('delete.destroy');

