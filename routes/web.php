<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Site\HomeController::class);

Route::get('/produtos', '\App\Http\Controllers\Site\CategoryController@index');

Route::get('/produtos/{slug}', '\App\Http\Controllers\Site\CategoryController@show');

Route::get('/blog', '\App\Http\Controllers\Site\BlogController');

Route::view('/sobre', 'site.about.index');

Route::get('/contato', '\App\Http\Controllers\Site\ContactController@index');

Route::post('/contato', '\App\Http\Controllers\Site\ContactController@form');