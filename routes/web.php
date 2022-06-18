<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','App\Http\Controllers\HomeController@index')->middleware('auth')->name('/');
Route::get('/home','App\Http\Controllers\HomeController@index')->middleware('auth')->name('home');

  Route::get('/login','App\Http\Controllers\Auth\LoginController@show_login_form')->name('login');
  Route::post('/login','App\Http\Controllers\Auth\LoginController@process_login')->name('login');
  Route::get('/register','App\Http\Controllers\Auth\LoginController@show_signup_form')->name('register');
  Route::post('/register','App\Http\Controllers\Auth\LoginController@process_signup');
  Route::get('/logout','App\Http\Controllers\Auth\LoginController@logout')->name('logout');

  
  Route::get('auth/google','App\Http\Controllers\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\GoogleController@handleGoogleCallback');