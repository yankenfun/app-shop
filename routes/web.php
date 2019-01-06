<?php
// Route::get('/', 'Chupapiezasprueba@welcome');  --> Enlace con el controlador

// Route::get('/prueba', function(){      --> Ruta de inicio
// 	return 'Hola gran puta';			  --> Vista Retornada
// });
Route::get('/', 'Chupapiezasprueba@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
