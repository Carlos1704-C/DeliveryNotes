<?php
include("Conectar.php");
$con = conectar();

$Id=$_GET["id"];

$sql = "DELETE FROM productos WHERE Id_Producto = '$Id'";
$query = mysqli_query($con, $sql);

if($query=true){
    Header("Location: Usuarios.php");
}else{

}
?>
