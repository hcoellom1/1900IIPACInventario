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