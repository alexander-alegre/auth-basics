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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/update_profile', 'HomeController@updateProfile')->name('update_profile');
Route::post('/update_password', 'HomeController@updatePassword')->name('update_password');
Route::get('/todo', 'TodoController@index')->name('todo_index');
Route::post('/todo', 'TodoController@store')->name('todo_store');
Route::get('/list', 'GroceryController@index')->name('list_index');
Route::post('/list', 'GroceryController@store')->name('list_store');

