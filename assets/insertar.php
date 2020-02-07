<?php
include '../conexion/conexion.php';
if (isset($_POST['submit'])) {

    $proveedor = $_POST['proveedor'];

    $insert = "INSERT INTO proveedor (Nombre_pro)
VALUES ('$proveedor')";
    $result = mysqli_query($conn, $insert);
    if (!$result) {

        header("Location:../partials/error.php");
    }
    header("Location:../views/registrarProveedor.php");
}