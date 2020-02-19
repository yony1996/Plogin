<?php
session_start();
include "../conexion/conexion.php";
$conn = mysqli_connect("localhost", "root", "", "bd_login");
$email = $_POST['Email'];
$password = $_POST['Password'];

//seleccion de los datos del usuario
$result = mysqli_query($conn, "SELECT id,Users,Email,Password,Role,Img FROM user WHERE Email = '$email'");
//almacenamiento de reultados en un array
$row = mysqli_fetch_assoc($result);
//password encriptada
$hash = $row['Password'];



if (password_verify($_POST['Password'], $hash)) {

    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $row['id'];
    $_SESSION['Email']=$row['Email'];
    $_SESSION['name'] = $row['Users'];
    $_SESSION['rol'] = $row['Role'];
    $_SESSION['img'] = $row['Img'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);



    header("location:../views/home.php");

} else {


    header("location:../partials/error.php");

}