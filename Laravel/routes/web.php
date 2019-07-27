<?php

Route::get('/user','RegisterController@index');
Route::post('/user','RegisterController@register')->name('user.register');
Route::get('/dashboard','ShowUserController@index')->name('user.show');
Route::get('/user/{id}/edit','ShowUserController@edit')->name('user.edit');
Route::post('/user/{id}/update','ShowUserController@update')->name('user.update');