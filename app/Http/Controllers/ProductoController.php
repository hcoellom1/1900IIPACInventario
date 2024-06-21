<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    //

    public function mostrar(){
        $productos = Producto::all();
        return view('mostrarproductos', compact('productos'));
    }
}
