<?php
$host = "localhost";
$usuario = "root";
$clave = "70976074";
$bd ="eval02";

$conexion01 = mysqli_connect($host,$usuario,$clave,$bd);

if(!$conexion01){
    die("Conexion fallo: ".mysqli_connect_error());
}else{
    echo "Conexion con exito";
}

function desconectar($conn) {
    mysqli_close($conn);}
?>