<?php
include("Conectar.php");
$con = conectar();

$Id_Producto = $_GET['Id'];
$Cantidad = $_POST['Cantidad'];
$Descripcion = $_POST['Descripcion'];
$Importe = $_POST['Importe'];

$sql = "SELECT $Importe * $Cantidad as subtotal FROM productos
WHERE Id_Producto = $Id_Producto ORDER BY $Id_Producto";
$query = mysqli_query($con, $sql);

echo($query);

?>