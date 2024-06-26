<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos/mostrar',
          [ProductoController::class, 'mostrar']);

Route::get('/producto/agregar',
          [ProductoController::class, 'crearProducto']);

Route::post('/producto/salvar',
          [ProductoController::class, 'guardar'])->name('producto.guardar');

Route::get('/productos/editar/{id}',
          [ProductoController::class, 'editar'])->name('producto.editar');

Route::get('/productos/editar/salvar/{id}',
          [ProductoController::class, 'salvarEditar'])->name('producto.editar.guardar');


Route::get('/productos/eliminar/{id}',
          [ProductoController::class, 'eliminar'])->name('producto.eliminar');

Route::get('/productos/destroy/{id}',
          [ProductoController::class, 'destroy'])->name('producto.destroy');