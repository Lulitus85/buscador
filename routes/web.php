<?php
use App\Http\Controllers\Auth\RegisterController;

Auth::routes();

Route::get('/faq', 'FaqController@index');


Route::group(['prefix'=>'profile'], function(){
    
    Route::get('/', 'ProfileController@index'); // Route::get('/{id}', 'UserController@showProducts');
    Route::get('/{id}', 'ProfileController@show');
});

//Categorias

Route::get('/','CategoryController@index');

Route::group(['prefix'=>'categorias'], function(){

    Route::get('/cargar','CategoryController@create'); //va a llevar al formulario de carga de categoria (solo administrador)
    Route::post('/cargar','CategoryController@store'); //va a guardar el categoria en la base de datos (solo administrador)
    Route::get('/hotstuff', 'CategoryController@hotStuff');
    Route::get('/{id}','CategoryController@show');
    

});

//SubCategorias
Route::group(['prefix'=>'subcategorias'], function(){

    Route::get('/cargar','SubcategoryController@create'); //va a llevar al formulario de carga de subcategoria (solo administrador)
    Route::post('/cargar','SubcategoryController@store');//va a guardar el subcategoria en la base de datos (solo administrador)
    
});

//Productos
Route::group(['prefix'=>'productos'], function(){

    Route::get('/usuario','ProductController@showProducts');
    Route::get('/cargar','ProductController@create'); //va a llevar al formulario de carga de producto
    Route::post('/cargar','ProductController@store');//va a guardar el producto en la base de datos
    Route::get('/busqueda', 'ProductController@search'); //buscador de productos
    Route::get('/categoria/{id}','ProductController@index'); //va a mostrar todos los productos segun el ID de categoria.    
    
    Route::get('/editar/{id}', 'ProductController@edit'); //va a llevar al formulario de edición
    Route::patch('/editar/{id}', 'ProductController@update'); //va a editar en la base de datos
    Route::delete('/editar/{id}','ProductController@destroy');
    Route::get('/{id}', 'ProductController@show'); //va a mostrar las fotos y detalle de un producto (JAVASCRIPT)
    
});

//Multimedia
Route::get('/productos/usuario/cargar_imagen/{id}','MultimediaController@create');
Route::post('/productos/usuario/cargar_imagen/{id}','MultimediaController@store');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

//Usuarios
/* Route::group(['prefix'=>'profile'], function(){
    Route::get('/{id}', 'UserController@showProducts')

}); */

//Categorias


//SubCategorias
Route::group(['prefix'=>'subcategorias'], function(){
    Route::get('/cargar','SubcategoryController@create'); //va a llevar al formulario de carga de subcategoria (solo administrador)
    Route::post('/cargar','SubcategoryController@store');//va a guardar el subcategoria en la base de datos (solo administrador)
});

//Productos
Route::group(['prefix'=>'productos'], function(){
    Route::get('/usuario','ProductController@showProducts');
    Route::get('/cargar','ProductController@create'); //va a llevar al formulario de carga de producto
    Route::post('/cargar','ProductController@store');//va a guardar el producto en la base de datos
    Route::get('/categoria/{id}', 'ProductController@index'); //va a mostrar todos los productos segun el ID de categoria.
    Route::get('/{id}', 'ProductController@show'); //va a mostrar las fotos y detalle de un producto (JAVASCRIPT)
    Route::get('/{id}/editar', 'ProductController@edit'); //va a llevar al formulario de edición
    Route::patch('/{id}/editar', 'ProductController@update'); //va a editar en la base de datos
    Route::delete('/{id}/editar','ProductController@destroy');//va a eliminar un producto
    
});

//Multimedias
Route::get('/productos/usuario/cargar_imagen/{id}','MultimediaController@create');
Route::post('/productos/usuario/cargar_imagen/{id}','MultimediaController@store');
Route::get('/{id}/editar', 'MultimediaController@edit'); 
Route::patch('/{id}/editar', 'MultimediaController@update'); 
Route::delete('/productos/usuario/cargar_imagen/{id}','MultimediaController@destroy');

