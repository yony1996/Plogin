<?php
session_start();
include "../conexion/conexion.php";
$conn=mysqli_connect("localhost","root","","bd_login");
$email = $_POST['Email'];
$password = $_POST['Password'];

//seleccion de los datos del usuario
$result = mysqli_query($conn, "SELECT Users,Email,Password,Role FROM user WHERE Email = '$email'");
//almacenamiento de reultados en un array
$row = mysqli_fetch_assoc($result);
//password encriptada
$hash = $row['Password'];

if (password_verify($_POST['Password'],$hash)){

    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $row['Users'];
   $_SESSION['rol']=$row['Role'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;

   header("location:../views/home.php");

}else{

    header("location:../partials/error.php");

}