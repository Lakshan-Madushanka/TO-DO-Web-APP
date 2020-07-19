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

Route::get('/', 'TodosController@index');
Route::get('/todos/{todo}', 'TodosController@show');
Route::get('/todos/{todo}/edit', 'TodosController@edit');

Route::get('/todos/{todo}/delete', 'TodosController@delete');
Route::get('/todos/{todo}/complete', 'TodosController@complete');

Route::get('/new-todo', 'TodosController@create');

Route::post('/store-todo', 'TodosController@store');
Route::post('/todos/{todo}/update-todos', 'TodosController@update');
