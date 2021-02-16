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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){

 Route::get('admin2', 'AdminDashboardController@index');
 // Users admin
 Route::get('admin/user/list', 'AdminUserController@index');
 Route::post('admin/user/create', 'AdminUserController@store');
 Route::get('admin/user/edit/{id}', 'AdminUserController@edit');
 Route::post('admin/user/delete/', 'AdminUserController@delete');
  Route::post('admin/user/edit', 'AdminUserController@update');
 Route::get('admin/user/getData', 'AdminUserController@getUsers')->name('admin/user/getData');
 Route::post('admin/user/userstatus', 'AdminUserController@status');


});




Auth::routes();


