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

use Illuminate\Support\Facades\Route;

Route::get('/','adminController@IndexView')->middleware('AdminControl');
Route::get('/login', 'adminController@LoginView');
Route::post('/login', 'adminController@login');
Route::post('/register', 'RestaurantController@Register')->middleware('AdminControl');
Route::get('/register', 'RestaurantController@RegisterView')->middleware('AdminControl');
Route::get('/modify', 'RestaurantController@ModifyView')->middleware('AdminControl');
Route::post('/modify/search','RestaurantController@search');
Route::get('/edit/{id}', 'RestaurantController@EditView')->middleware('AdminControl');
Route::post('/edit2/{id}', 'RestaurantController@Edit')->middleware('AdminControl');
Route::get('/delete/{id}', 'RestaurantController@delete')->middleware('AdminControl');
Route::get('/deletemenu/{id}', 'RestaurantController@delete_menu')->middleware('AdminControl');

