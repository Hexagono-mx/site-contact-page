<?php

Route::get('contacto', function (){
    return view('contact::page-layout');
});

Route::group([
    'namespace' => 'Hexagono\Contact\Http\Controllers',
    'middleware' => ['web']
    ], function (){

    Route::get ('contacto', 'ContactController@index')->name('contacto');
    Route::post('contacto', 'ContactController@send');
});
