<?php
include '../conexion/conexion.php';
$conn = mysqli_connect("localhost", "root", "", "bd_login");


$name = $_POST['nombre'];
$precio = $_POST['precio'];
$tamano = $_POST['tamano'];
$id = $_POST['id_proveedor'];


$insert = "INSERT INTO producto (Nombre,Precio,Tamano,id)VALUES('$name','$precio','$tamano','$id')";
$result = mysqli_query($conn, $insert);
if (!$result) {

    header("Location:../partials/error.php");
}
header("Location:../views/registrarProducto.php");


