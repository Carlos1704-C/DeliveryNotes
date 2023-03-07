<?php
include("Conectar.php");
$con = conectar();

$Id_Producto = null;
$Cantidad = $_POST['Cantidad'];
$Descripcion = $_POST['Descripcion'];
$Importe = $_POST['Importe'];

$sql = "INSERT INTO productos VALUES(null,'$Cantidad','$Descripcion','$Importe')";
$query = mysqli_query($con, $sql);

if($query = true){
    Header("Location: Usuarios.php");
}else{

}

?>