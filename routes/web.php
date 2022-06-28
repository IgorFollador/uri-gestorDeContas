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

Route::group(['prefix'=>'parcelas', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'parcelas',            'uses'=>'\App\Http\Controllers\ParcelasController@index']);
    Route::get('create',           ['as'=>'parcelas.create',     'uses'=>'\App\Http\Controllers\ParcelasController@create']);
    Route::get('{id}/destroy',     ['as'=>'parcelas.destroy',    'uses'=>'\App\Http\Controllers\ParcelasController@destroy']);
    Route::get('{id}/edit',        ['as'=>'parcelas.edit',       'uses'=>'\App\Http\Controllers\ParcelasController@edit']);
    Route::put('{id}/update',      ['as'=>'parcelas.update',     'uses'=>'\App\Http\Controllers\ParcelasController@update']);
    Route::post('store',           ['as'=>'parcelas.store',      'uses'=>'\App\Http\Controllers\ParcelasController@store']);
});

Route::group(['prefix'=>'usuarios', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'usuarios',            'uses'=>'\App\Http\Controllers\UsuariosController@index']);
    Route::get('create',           ['as'=>'usuarios.create',     'uses'=>'\App\Http\Controllers\UsuariosController@create']);
    Route::get('{id}/destroy',     ['as'=>'usuarios.destroy',    'uses'=>'\App\Http\Controllers\UsuariosController@destroy']);
    Route::get('{id}/edit',        ['as'=>'usuarios.edit',       'uses'=>'\App\Http\Controllers\UsuariosController@edit']);
    Route::put('{id}/update',      ['as'=>'usuarios.update',     'uses'=>'\App\Http\Controllers\UsuariosController@update']);
    Route::post('store',           ['as'=>'usuarios.store',      'uses'=>'\App\Http\Controllers\UsuariosController@store']);
});

Route::group(['prefix'=>'contas', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'contas',            'uses'=>'\App\Http\Controllers\ContasController@index']);
    Route::get('create',           ['as'=>'contas.create',     'uses'=>'\App\Http\Controllers\ContasController@create']);
    Route::get('{id}/destroy',     ['as'=>'contas.destroy',    'uses'=>'\App\Http\Controllers\ContasController@destroy']);
    Route::get('{id}/edit',        ['as'=>'contas.edit',       'uses'=>'\App\Http\Controllers\ContasController@edit']);
    Route::put('{id}/update',      ['as'=>'contas.update',     'uses'=>'\App\Http\Controllers\ContasController@update']);
    Route::post('store',           ['as'=>'contas.store',      'uses'=>'\App\Http\Controllers\ContasController@store']);
});

Route::group(['prefix'=>'categoriaContas', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'categoriaContas',            'uses'=>'\App\Http\Controllers\CategoriaContasController@index']);
    Route::get('create',           ['as'=>'categoriaContas.create',     'uses'=>'\App\Http\Controllers\CategoriaContasController@create']);
    Route::get('{id}/destroy',     ['as'=>'categoriaContas.destroy',    'uses'=>'\App\Http\Controllers\CategoriaContasController@destroy']);
    Route::get('{id}/edit',        ['as'=>'categoriaContas.edit',       'uses'=>'\App\Http\Controllers\CategoriaContasController@edit']);
    Route::put('{id}/update',      ['as'=>'categoriaContas.update',     'uses'=>'\App\Http\Controllers\CategoriaContasController@update']);
    Route::post('store',           ['as'=>'categoriaContas.store',      'uses'=>'\App\Http\Controllers\CategoriaContasController@store']);
});

Route::group(['prefix'=>'renegociacao', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'renegociacao',            'uses'=>'\App\Http\Controllers\RenegociacaoController@index']);
    Route::get('create',           ['as'=>'renegociacao.create',     'uses'=>'\App\Http\Controllers\RenegociacaoController@create']);
    Route::get('{id}/destroy',     ['as'=>'renegociacao.destroy',    'uses'=>'\App\Http\Controllers\RenegociacaoController@destroy']);
    Route::get('{id}/edit',        ['as'=>'renegociacao.edit',       'uses'=>'\App\Http\Controllers\RenegociacaoController@edit']);
    Route::put('{id}/update',      ['as'=>'renegociacao.update',     'uses'=>'\App\Http\Controllers\RenegociacaoController@update']);
    Route::post('store',           ['as'=>'renegociacao.store',      'uses'=>'\App\Http\Controllers\RenegociacaoController@store']);
});

Route::group(['prefix'=>'moedas', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',                 ['as'=>'moedas',            'uses'=>'\App\Http\Controllers\MoedasController@index']);
    Route::get('create',           ['as'=>'moedas.create',     'uses'=>'\App\Http\Controllers\MoedasController@create']);
    Route::get('{id}/destroy',     ['as'=>'moedas.destroy',    'uses'=>'\App\Http\Controllers\MoedasController@destroy']);
    Route::get('{id}/edit',        ['as'=>'moedas.edit',       'uses'=>'\App\Http\Controllers\MoedasController@edit']);
    Route::put('{id}/update',      ['as'=>'moedas.update',     'uses'=>'\App\Http\Controllers\MoedasController@update']);
    Route::post('store',           ['as'=>'moedas.store',      'uses'=>'\App\Http\Controllers\MoedasController@store']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');