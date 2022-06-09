<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::group(['prefix'=>'FormaDePagamento', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'FormaDePagamento',            'uses'=>'\App\Http\Controllers\FormaDePagamentoController@index']);
    Route::get('create',        ['as'=>'FormaDePagamento.create',     'uses'=>'\App\Http\Controllers\FormaDePagamentoController@create']);
    Route::post('store',        ['as'=>'FormaDePagamento.store',      'uses'=>'\App\Http\Controllers\FormaDePagamentoController@store']);
    Route::get('{id}/destroy',  ['as'=>'FormaDePagamento.destroy',    'uses'=>'\App\Http\Controllers\FormaDePagamentoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'FormaDePagamento.edit',       'uses'=>'\App\Http\Controllers\FormaDePagamentoController@edit']);
    Route::put('{id}/update',   ['as'=>'FormaDePagamento.update',     'uses'=>'\App\Http\Controllers\FormaDePagamentoController@update']);
});

Route::group(['prefix'=>'jurosEMultas', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'jurosEMultas',            'uses'=>'\App\Http\Controllers\JurosEMultasController@index']);
    Route::get('create',           ['as'=>'jurosEMultas.create',     'uses'=>'\App\Http\Controllers\JurosEMultasController@create']);
    Route::get('{id}/destroy',     ['as'=>'jurosEMultas.destroy',    'uses'=>'\App\Http\Controllers\JurosEMultasController@destroy']);
    Route::get('{id}/edit',        ['as'=>'jurosEMultas.edit',       'uses'=>'\App\Http\Controllers\JurosEMultasController@edit']);
    Route::put('{id}/update',      ['as'=>'jurosEMultas.update',     'uses'=>'\App\Http\Controllers\JurosEMultasController@update']);
    Route::post('store',           ['as'=>'jurosEMultas.store',      'uses'=>'\App\Http\Controllers\JurosEMultasController@store']);
});

Route::group(['prefix'=>'usuarios', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'usuarios',            'uses'=>'\App\Http\Controllers\UsuariosController@index']);
    Route::get('create',           ['as'=>'usuarios.create',     'uses'=>'\App\Http\Controllers\UsuariosController@create']);
    Route::get('{id}/destroy',     ['as'=>'usuarios.destroy',    'uses'=>'\App\Http\Controllers\UsuariosController@destroy']);
    Route::get('{id}/edit',        ['as'=>'usuarios.edit',       'uses'=>'\App\Http\Controllers\UsuariosController@edit']);
    Route::put('{id}/update',      ['as'=>'usuarios.update',     'uses'=>'\App\Http\Controllers\UsuariosController@update']);
    Route::post('store',           ['as'=>'usuarios.store',      'uses'=>'\App\Http\Controllers\UsuariosController@store']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');