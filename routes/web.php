<?php


Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index'); // listado

Route::get('/admin/products/create', 'ProductController@create'); // formulario

Route::post('/admin/products', 'ProductController@store'); // registra datos

Route::get('/admin/products/{id}/edit', 'ProductController@edit'); // formulario de edición

Route::post('/admin/products/{id}/edit', 'ProductController@update'); // actualizar

Route::get('/admin/products/{id}/delete', 'ProductController@destroy'); // Eliminar

