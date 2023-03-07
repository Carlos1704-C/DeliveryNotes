<?php
include("Conectar.php");
$con = conectar();

$sql = "DELETE FROM productos";
$query = mysqli_query($con, $sql);

if($query=true){
    Header("Location: Usuarios.php");
}else{

}
?>