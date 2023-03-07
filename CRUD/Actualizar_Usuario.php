<?php
include("Conectar.php");
$con = conectar();



$Id_Producto = $_GET['id'];

    $sql = "SELECT * FROM productos WHERE Id_Producto ='$Id_Producto'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Usuarios.css">
    <title>Document</title>
</head>

<body>

    <body>

        <div class="Usuarios">
            <h1>PRODUCT EDITOR</h1>
            <form action="Editar_Usuario.php" method="POST" id="FormEditarProducto">
                <label for="Id">Id</label>
                <input type="text" name="IdActualizar" placeholder="Id" value="<?= $row['Id_Producto']?>">
                <label for="Id">QUANTITY</label>
                <input type="text" name="CantidadActualizar" placeholder="Cantidad" value="<?= $row['Cantidad']?>">
                <label for="Id">DESCRIPTION</label>
                <input type="text" name="DescripcionActualizar" placeholder="Descripcion" value="<?= $row['Descripcion']?>">
                <label for="Id">IMPORT</label>
                <input type="text" name="ImporteActualizar" placeholder="Importe" value="<?= $row['Importe']?>">

                <input id="Actualizar" type="submit" value="Update">

            </form>
        </div>
    </body>

</html>