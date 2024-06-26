<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Mostrar Productos</h1>
                
        <!-- Tabla para mostrar registros -->
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->idProducto }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                          <a href={{route('producto.editar', $producto->idProducto )}}>Editar</a>
                        </td>
                        <td>
                            <a href={{route('producto.eliminar', $producto->idProducto )}}>Eliminar</a>
                          </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>