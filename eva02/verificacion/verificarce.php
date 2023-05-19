<?php
// verificar_usuario.php

include('../conexion.php');

// Obtener los datos del formulario
$email = $_POST['email'];
$pasword = $_POST['pasword'];

// Abrir la conexión a la base de datos
$conexion = $conexion01;

// Consulta SQL para verificar el usuario
$sql = "SELECT * FROM usuario WHERE email = '$email' AND pasword = '$pasword'";
$resultado = mysqli_query($conexion, $sql);


if (mysqli_num_rows($resultado) > 0) {

    header("Location: ../index.html");
    exit;
} else {
    echo '<div class="container mt-5">';
    echo '<div class="alert alert-danger">Credenciales inválidas. Por favor, verifique su email y contraseña.</div>';
    echo '<a href="verificarce.html" class="btn btn-primary">Volver</a>';
    echo '</div>';
}

// Cerrar la conexión a la base de datos
desconectar($conexion);
?>