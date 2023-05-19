<?php
include('../conexion.php');

$idusuario = $_POST['idusuario'];


$conexion = $conexion01;


$sql ="DELETE FROM usuario WHERE idusuario = $idusuario";


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
    <title>Borrar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="usuario.php" class="btn btn-primary mt-3">Regresar</a>

        <?php
            if (!$resultado) {
                echo '<div class="alert alert-danger mt-3">No se ha podido borrar al Usuario</div>';
            } else {
                echo '<div class="alert alert-success mt-3">Usuario borrado</div>';
            }
        ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
