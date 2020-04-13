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

Route::group(['prefix' => 'sessions'], function () {
    Route::get('', [
        'uses' => 'SessieController@getIndex',
        'as' => 'sessions'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'SessieController@getEdit',
        'as' => 'sessions.edit'
    ]);
    Route::get('create', [
        'uses' => 'SessieController@getCreate',
        'as' => 'sessions.create'
    ]);
    Route::post('postCreate', [
        'uses' => 'SessieController@postCreate',
        'as' => 'sessions.postCreate'
    ]);
    Route::post('update', [
        'uses' => 'SessieController@postUpdate',
        'as' => 'sessions.update'
    ]);
    Route::get('delete/{id}', [
        'uses' => 'SessieController@getDelete',
        'as' => 'sessions.delete'
    ]);
});

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

Route::group(['prefix' => 'partners'], function () {
    Route::get('', [
        'uses' => 'PartnerController@getIndex',
        'as' => 'partners'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'PartnerController@getEdit',
        'as' => 'partners.edit'
    ]);
    Route::get('create', [
        'uses' => 'PartnerController@getCreate',
        'as' => 'partners.create'
    ]);
    Route::post('postCreate', [
        'uses' => 'PartnerController@postCreate',
        'as' => 'partners.postCreate'
    ]);
    Route::post('update', [
        'uses' => 'PartnerController@postUpdate',
        'as' => 'partners.update'
    ]);
    Route::get('delete/{id}', [
        'uses' => 'PartnerController@getDelete',
        'as' => 'partners.delete'
    ]);
});

Route::group(['prefix' => 'tickets'], function () {
    Route::get('', [
        'uses' => 'TicketController@getIndex',
        'as' => 'tickets'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'TicketController@getEdit',
        'as' => 'tickets.edit'
    ]);
    Route::get('create', [
        'uses' => 'TicketController@getCreate',
        'as' => 'tickets.create'
    ]);
    Route::post('postCreate', [
        'uses' => 'TicketController@postCreate',
        'as' => 'tickets.postCreate'
    ]);
    Route::post('update', [
        'uses' => 'TicketController@postUpdate',
        'as' => 'tickets.update'
    ]);
    Route::get('delete/{id}', [
        'uses' => 'TicketController@getDelete',
        'as' => 'tickets.delete'
    ]);
});
