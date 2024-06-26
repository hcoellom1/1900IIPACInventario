<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Producto</title>
</head>
<body>
    <h2>Eliminar Producto</h2>
    <h3>Codigo Producto: {{ $productoEliminar->idProducto }}</h3>

    
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="nombre" value={{ $productoEliminar->nombre}} readonly >
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion" value={{$productoEliminar->descripcion}} readonly >
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" value={{$productoEliminar->precio}}  readonly>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="{{$productoEliminar->categoria}}"  readonly>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" value="{{$productoEliminar->tipo}}" readonly>
        </div>
        
        <div>
            <p>Esta seguro de eliminar este registro?</p>
            <a href="{{route('producto.destroy', $productoEliminar->idProducto)}}">Eliminar</a>
        </div>
    
    
</body>
</html>