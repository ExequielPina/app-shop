<?php


Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/products', 'ProductController@index'); // listado

    Route::get('/products/create', 'ProductController@create'); // formulario
    
    Route::post('/products', 'ProductController@store'); // registra datos
    
    Route::get('/products/{id}/edit', 'ProductController@edit'); // formulario de edición
    
    Route::post('/products/{id}/edit', 'ProductController@update'); // actualizar
    
    Route::delete('/products/{id}', 'ProductController@destroy'); // Eliminar

    Route::get('/products/{id}/images', 'ImageController@index'); 

    Route::post('/products{id}/images', 'imageController@store'); 

    Route::delete('/products/{id}/images', 'imageController@destroy');
});




