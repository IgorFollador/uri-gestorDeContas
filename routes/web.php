<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
});

Route::group(['prefix'=>'FormaDePagamento', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'FormaDePagamento',            'uses'=>'\App\Http\Controllers\FormaDePagamentoController@index']);
    Route::get('create',        ['as'=>'FormaDePagamento.create',     'uses'=>'\App\Http\Controllers\FormaDePagamentoController@create']);
    Route::post('store',        ['as'=>'FormaDePagamento.store',      'uses'=>'\App\Http\Controllers\FormaDePagamentoController@store']);
    Route::get('{id}/destroy',  ['as'=>'FormaDePagamento.destroy',    'uses'=>'\App\Http\Controllers\FormaDePagamentoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'FormaDePagamento.edit',       'uses'=>'\App\Http\Controllers\FormaDePagamentoController@edit']);
    Route::put('{id}/update',   ['as'=>'FormaDePagamento.update',     'uses'=>'\App\Http\Controllers\FormaDePagamentoController@update']);
});



