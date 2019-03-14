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

Route::post('/login', 'admin@login');
Route::get('/register', 'admin@register');
Route::get('/loginpage', 'admin@loginpage');
Route::get('/registerpage', 'admin@registerpage');
Route::get('/panel', 'admin@adminpanel');
Route::get('/','admin@adminpanel');
Route::post('/register', 'admin@register');
