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
})->name('mainPage');

Route::get('/add', function () {
    return view('add_task');
})->name('add');

Route::get('/tasks/{id}/edit', 'TaskController@edit')->name('edit');
Route::get('/tasks', 'TaskController@index')->name('index');
Route::get('/createTask','TaskController@createTask')->name('createTask');
Route::get('/tasks/{id}/destroy', 'TaskController@destroy')->name('destroy');

//
//Route::get('/edit', function () {
//    return view('edit');
//})->name('editTask');
//
//Route::get('/delete', function () {
//    return view('delete');
//})->name('deleteTask');
