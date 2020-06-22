<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TasksController@index') -> name('home');
