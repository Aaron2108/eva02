<?php

include('../conexion.php');

// Obtenemos la información del alumno
// Obtenemos el ID del alumno a borrar
$idusuario = $_POST['idusuario'];
$nombre = $_POST['nombre'];
$ape_pa = $_POST['ape_pa'];
$ape_ma = $_POST['ape_ma'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$pasword = $_POST['pasword'];
// Abrimos la conexión a la base de datos
$conexion = $conexion01;

// Formamos la consulta SQL
$sql ="UPDATE usuario SET nombre='$nombre', ape_pa='$ape_pa', ape_ma='$ape_ma', direccion='$direccion', email = '$email', telefono = '$telefono', pasword = '$pasword' WHERE idusuario = $idusuario";


// Ejecutamos la instrucción SQL
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
    <title>Usuario UPDATE</title>
</head>
<body>
    <a href="usuario.php">Regresar</a>
    <?php
if (!$resultado) {
    echo 'No se ha podido editar al Usuario';
}
else {
    echo 'Usuario editado';
}

?>
</body>
</html>