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
    return view('home');
});

//Strategy guides
// Route::get('/strategy', 'StrategyController@index');
// Route::get('/strategy/create', 'StrategyController@create');
// Route::post('/strategy/store', 'StrategyController@store');
Route::resouce('strategy', 'StrategyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
