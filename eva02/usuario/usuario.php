<?php
include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = $conexion01;

// Definimos la consulta SQL
$sql = 'SELECT idusuario, nombre, ape_pa, ape_ma, direccion, email, telefono, pasword FROM usuario';

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
    <h1 class="mt-3 mb-3">Usuarios</h1>
    <div class="row">
      <div class="col-12 mb-3">
        <a class="btn btn-primary" href="agregar_usuario.html">Nuevo Usuario</a>
      </div>
      <div class="col-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombres</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Dirrecion</th>
              <th>Email</th>
              <th>Telefono</th>
              <th>Contraseña</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //Recorrer el array con el resultado de la consulta
            while ($usuario = mysqli_fetch_array($resultado)) {
              $idusuario = $usuario['idusuario'];
              $nombre = $usuario['nombre'];
              $ape_pa = $usuario['ape_pa'];
              $ape_ma = $usuario['ape_ma'];
              $direccion = $usuario['direccion'];
              $email = $usuario['email'];
              $telefono = $usuario['telefono'];
              $pasword = $usuario['pasword'];

              echo '<tr>';
              echo '<td>' . $idusuario . '</td>';
              echo '<td>' . $nombre . '</td>';
              echo '<td>' . $ape_pa . '</td>';
              echo '<td>' . $ape_ma . '</td>';
              echo '<td>' . $direccion . '</td>';
              echo '<td>' . $email . '</td>';
              echo '<td>' . $telefono . '</td>';
              echo '<td>' . $pasword . '</td>';
              echo '<td><a class="btn btn-info btn-sm" href="editar_usuario.html">Editar</a><a class="btn btn-danger btn-sm" href="eliminar_usuario.html">Eliminar</a></td>';
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
