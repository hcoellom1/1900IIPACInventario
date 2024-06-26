<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
</head>
<body>
    <h2>Editar Producto</h2>
    <h3>Codigo Producto: {{ $productoEditar->idProducto }}</h3>

    <div class="form-container">
        <form action="{{ route('producto.editar.guardar', $productoEditar->idProducto) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="nombre" value={{ $productoEditar->nombre}} required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" value={{$productoEditar->descripcion}} required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" value={{$productoEditar->precio}}  required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" value="{{$productoEditar->categoria}}"  required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" id="tipo" name="tipo" value={{$productoEditar->tipo}} required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>