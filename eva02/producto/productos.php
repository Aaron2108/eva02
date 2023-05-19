<?php
include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = $conexion01;

// Definimos la consulta SQL
$sql = 'SELECT idproducto, nombre, descripcion, stock, precio_venta FROM producto';

// Ejecutamos el query en la conexión abierta
$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexión
desconectar($conexion);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios</title>
  <!-- Agregamos el link a los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="mt-3 mb-3">Productos</h1>
    <div class="row">
      <div class="col-12 mb-3">
        <a class="btn btn-primary" href="agregar_producto.html">Nuevo Producto</a>
      </div>
      <div class="col-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombres</th>
              <th>descripcion</th>
              <th>Stock</th>
              <th>Precio de Venta</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //Recorrer el array con el resultado de la consulta
            while ($producto = mysqli_fetch_array($resultado)) {
              $idproducto = $producto['idproducto'];
              $nombre = $producto['nombre'];
              $descripcion = $producto['descripcion'];
              $stock = $producto['stock'];
              $precio_venta = $producto['precio_venta'];
             

              echo '<tr>';
              echo '<td>' . $idproducto . '</td>';
              echo '<td>' . $nombre . '</td>';
              echo '<td>' . $descripcion . '</td>';
              echo '<td>' . $stock . '</td>';
              echo '<td>' . $precio_venta . '</td>';
              echo '<td><a class="btn btn-info btn-sm" href="editar_producto.html">Editar</a><a class="btn btn-danger btn-sm" href="eliminar_producto.html">Eliminar</a></td>';
              echo '</tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Agregamos el script de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>