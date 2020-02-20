<?php
session_start();
include '../conexion/conexion.php';
$conn = mysqli_connect("localhost", "root", "", "bd_login");


$id = $_POST['id'];

$usuario = $_POST['User'];
$clave = $_POST['Password'];
$correo = $_POST['Email'];
$permitidos = array('.jpg', '.jpeg', '.png');
$limite = 100;

$name = $_FILES['imagen']['name'];

$ext = substr($name, strrpos($name, '.'));
if (in_array($ext, $permitidos)) {
    $ruta = '../img/'.$name;
    $tmp_name = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($tmp_name, $ruta);

}
$update = " Update user Set Users = '" . $usuario . "',Email='" . $correo . "',Img='" . $name . "' Where id='" . $id . "'";

$result = mysqli_query($conn, $update);
if (!$result) {

    header("Location:../partials/error.php");
}
header("Location:../views/Perfil.php");







