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

Route::group(['prefix' => 'speakers'], function () {
    Route::get('', [
        'uses' => 'SprekerController@getIndex',
        'as' => 'speakers'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'SprekerController@getEdit',
        'as' => 'speakers.edit'
    ]);
    Route::get('create', [
        'uses' => 'SprekerController@getCreate',
        'as' => 'speakers.create'
    ]);
    Route::post('postCreate', [
        'uses' => 'SprekerController@postCreate',
        'as' => 'speakers.postCreate'
    ]);
    Route::post('update', [
        'uses' => 'SprekerController@postUpdate',
        'as' => 'speakers.update'
    ]);
    Route::get('delete/{id}', [
        'uses' => 'SprekerController@getDelete',
        'as' => 'speakers.delete'
    ]);
});
