<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('speakers', [
    'uses' => 'API\SprekerController@index'
]);

Route::get('speakers/{id}', [
    'uses' => 'API\SprekerController@show'
]);

Route::get('partners', [
    'uses' => 'API\PartnerController@index'
]);

Route::get('partners/{id}', [
    'uses' => 'API\PartnerController@show'
]);

Route::get('sessions', [
    'uses' => 'API\SessieController@index'
]);

Route::get('sessions/{id}', [
    'uses' => 'API\SessieController@show'
]);

Route::get('tickets', [
    'uses' => 'API\TicketController@index'
]);
