<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/random', 'RandController@getPage')->name('random');
Route::get('/guessed', 'RandController@store')->name('guessed');

Auth::routes();

Route::get('/getID/{id?}', 'RandController@value')->name('var');

Auth::routes();

Route::get('/users', function() {
    return view('users', ['users'=>DB::table('users')->get()]);
})->name('users');

Auth::routes();

Route::get('/users/{userid}', function($userid) {
   return view('user', ['users'=>DB::table('users')->
   where('id', "$userid")->first()]);
})->name('user');
