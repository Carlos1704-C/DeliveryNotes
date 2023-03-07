<?php
function conectar()
{
    $servidor = 'localhost';
    $basededatos = "bdproductos";
    $usuario = "admin";
    $password = "rEPB(3yt64_NwJ[V";
    $port = "3308";

    $conexion = mysqli_connect($servidor,$usuario,$password,$basededatos, $port) or die ("No se conecto");

    mysqli_select_db($conexion, $basededatos);

    return $conexion;
}
?>