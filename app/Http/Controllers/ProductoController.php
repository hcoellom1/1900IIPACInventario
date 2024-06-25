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

    public function crearProducto(){
        return view('agregarproducto');
    }

    public function guardar(Request $request){
        $nvoProducto = new Producto();
        $nvoProducto->nombre = $request->nombre;
        $nvoProducto->descripcion = $request->descripcion;
        $nvoProducto->precio = $request->precio;
        $nvoProducto->categoria =$request->categoria;
        $nvoProducto->tipo = $request->tipo;
        $nvoProducto->save();

        return redirect('/productos/mostrar');
    }

}
