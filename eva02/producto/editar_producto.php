<?php

include('../conexion.php');

// Obtenemos la información del alumno
// Obtenemos el ID del alumno a borrar
$idproducto = $_POST['idproducto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio_venta = $_POST['precio_venta'];
// Abrimos la conexión a la base de datos
$conexion = $conexion01;

// Formamos la consulta SQL
$sql ="UPDATE producto SET nombre='$nombre', descripcion='$descripcion', stock='$stock', precio_venta ='$precio_venta'  WHERE idproducto = $idproducto";


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
    <title>Producto UPDATE</title>
</head>
<body>
    <a href="productos.php">Regresar</a>
    <?php
if (!$resultado) {
    echo 'No se ha podido editar al Producto';
}
else {
    echo 'Producto editado';
}

?>
</body>
</html>