<?php
session_start();
include '../conexion/conexion.php';
$conn=mysqli_connect("localhost","root","","bd_login");
$id=$_POST['id'];


        $usuario=$_POST['User'];
        $clave=$_POST['Password'];
        $image=$_POST['imagen'];
        $correo=$_POST['Email'];
        $permitidos=array("image/jpg","image/jpeg","image/png");
        $limite=100;
        if(in_array($_FILES["imagen"]['type'],$permitidos)&&$_FILES["imagen"]['size']<-$limite*1024){
            $ruta="../img";
            $name=$_FILES["imagen"]['name'];
            $path=$ruta.$name;
            $tmp_name=$_FILES["imagen"]["tmp_name"];
            copy($_FILES["imagen"]['tmp_name'],$ruta."/".$name);
        }
        $update = " Update user Set Users = '" . $usuario . "',Email='" . $correo . "',Img='" . $_FILES["imagen"]['name']. "' Where id='" . $id. "'";

        $result = mysqli_query($conn, $update)or die("error");
        if (!$result) {

            header("Location:../partials/error.php");
        }
        header("Location:../views/Perfil.php");




