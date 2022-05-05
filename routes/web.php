<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
