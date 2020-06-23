<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TasksController@index') -> name('home');
Route::get('/show/{id}', 'TasksController@show') -> name('show');
Route::get('/show/delete/{id}', 'TasksController@delete') -> name('delete');
Route::get('/edit/{id}', 'TasksController@edit') -> name('edit');
Route::post('/update/{id}', 'TasksController@update') -> name('update');
Route::get('/create', 'TasksController@create') -> name('create');
Route::post('/store', 'TasksController@store') -> name('store');

