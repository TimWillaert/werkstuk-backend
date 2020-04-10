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
    return view('content.index');
});

Route::get('home', function () {
    return view('content.index');
})->name('home');

Route::get('sprekers', [
    'uses' => 'SprekerController@getIndex',
    'as' => 'sprekers'
]);

Route::get('createspreker', [
    'uses' => 'SprekerController@getCreate',
    'as' => 'sprekers.create'
]);

Route::post('postcreatespreker', [
    'uses' => 'SprekerController@postCreate',
    'as' => 'sprekers.postcreate'
]);

Route::get('spreker/{id}', [
    'uses' => 'SprekerController@getEdit',
    'as' => 'sprekers.edit'
]);

Route::post('updatespreker', [
    'uses' => 'SprekerController@postUpdate',
    'as' => 'sprekers.update'
]);

Route::get('deletespreker/{id}', [
    'uses' => 'SprekerController@getDelete',
    'as' => 'sprekers.delete'
]);
