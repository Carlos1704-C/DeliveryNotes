<?php

include("Conectar.php");
$con = conectar();

$Id=$_POST["IdActualizar"];
$Cantidad = $_POST['CantidadActualizar'];
$Descripcion = $_POST['DescripcionActualizar'];
$Importe = $_POST['ImporteActualizar'];

$sql="UPDATE productos SET Id_Producto='$Id',Cantidad='$Cantidad',Descripcion='$Descripcion',Importe='$Importe' WHERE Id_Producto='$Id'";
$query = mysqli_query($con, $sql);

if($query = true){
    Header("Location: Usuarios.php");
}else{

}

?>
