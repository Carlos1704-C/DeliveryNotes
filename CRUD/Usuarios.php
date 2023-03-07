<?php
include('Conectar.php');
$con = conectar();
$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Script.js" defer></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="Usuarios.css">
    <script src="https://kit.fontawesome.com/4fc9fb94b8.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Note.Me</title>
</head>

<body>
    <h1 id="Encabezado">MARTHA'S IMPORT</h1>
    <divc class="Escondercontenido" id="hiddeninfo" style="display: block;">
        <h2>Contact Information:</h2>
        <h3>Adress: 3419 San Agustin, Laredo Texas</h3>
        <h3>Phone number: (956)-740-3132</h3>
    </divc>
    <!--<label for="dark-mode" class="dark-mode-button">
        <input type="checkbox" id="dark-mode" onclick="document.documentElement.classList.toggle('dark-mode')">
        <i class="fa-solid fa-sun" id="sun"></i>
        <i class="fa-solid fa-moon" id="moon"></i>
    </label>-->
    <div class="BotonesContenido">
        <button id="btnMostrar" onclick="MostrarElemento()">Nota formal</button>
        <button id="btnEsconder" onclick="EsconderElemento()">Nota informal</button>
    </div>
    <div class="Usuarios" id="Formusuarios">
        <h2>PRODUCTS LIST</h2>
        <form action="Agregar_Usuario.php" method="POST" id="Input">
            <!--<input type="text" name="Id" placeholder="Id" id="Id">-->
            <input type="text" name="Cantidad" placeholder="Quantity" id="Cantidad">
            <input type="text" name="Descripcion" placeholder="Description" id="Descripcion">
            <input type="text" name="Importe" placeholder="Import" id="Importe">
            <button id="btnagg" type="submit" value="Agregar"><i class="fa-sharp fa-solid fa-plus"></i></button>
        </form>
    </div>

    <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Import</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th id="theditar">Edit</th>
                    <th id="theliminar">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php  $Suma = 0; while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <!--<th>
                                    <?= $row['Id_Producto'] ?>
                        </th>-->
                            <th>
                                <?= $row['Cantidad'] ?>
                            </th>
                            <th>
                                <?= $row['Descripcion'] ?>
                            </th>
                            <th>$
                                <?= $row['Importe'] ?>
                            </th>
                            <th>$
                                <?= $row['Importe'] * $row['Cantidad'] ?>
                            </th>
                            <th id="TotalCell">$
                            <?=$Suma = $Suma + ($row["Importe"] * $row["Cantidad"]) ?>
                            </th>
                            <th><a href="Actualizar_Usuario.php?id=<?= $row['Id_Producto'] ?>"><box-icon type='solid'
                                        name='edit'></box-icon></a></th>
                            <th><a href="Eliminar_Usuario.php?id=<?= $row['Id_Producto'] ?>"><box-icon type='solid'
                                        name='trash'></box-icon></a></th>
                    <?php endwhile; ?>

            </tbody>
        </table>
    </div>
    <div class="BotonesGuardarYNueva">
        <button id="btnGuardar">Guardar</button>
    </div>

    <div class="NuevaNota"><a id="LinkNuevaNota" href="Eliminar_Tabla.php?">NUEVA</a></div>

    <div class="WaterMark">
        <h5>J&M Solutions</h5>
    </div>
</body>

</html>