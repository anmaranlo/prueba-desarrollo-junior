<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home'); 

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::resource('clientes','clientesController');
    Route::get('clientes/{id}/destroy', [
        'uses' => 'clientesController@destroy',
        'as' => 'admin.clientes.destroy'
    ]);
});

