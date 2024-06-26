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

    public function editar($id){
        $productoEditar = Producto::find($id);
        return view('editarProducto', compact('productoEditar'));
    }

    public function salvarEditar(Request $request, $id){
        $productoActualizar = Producto::find($id);
        $productoActualizar->nombre = $request->nombre;
        $productoActualizar->descripcion = $request->descripcion;
        $productoActualizar->precio = $request->precio;
        $productoActualizar->categoria = $request->categoria;
        $productoActualizar->tipo = $request->tipo;
        $productoActualizar->save();
        return redirect('/productos/mostrar');
    }

    public function eliminar($id){
        $productoEliminar = Producto::find($id);
        return view('eliminarProducto', compact('productoEliminar'));
    }

    public function destroy($id){
        $productoEliminar = Producto::find($id);
        $productoEliminar->delete();
        
        return redirect('/productos/mostrar');
    }

}
