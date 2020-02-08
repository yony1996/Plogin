<?php
include '../conexion/conexion.php';
$conn=mysqli_connect("localhost","root","","bd_login");


    $checkEmail = "SELECT * FROM user WHERE Email = '$_POST[Email]' ";
    $result = $conn->query($checkEmail);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>El Email ya esta registrado</p>
					
				</div>";
    } else {

        $name = $_POST['proveedor'];
        $rol='3';
        $email=$_POST['Email'];
        $password="root1234";
        $passHash = password_hash($password, PASSWORD_DEFAULT);

        $insert = "INSERT INTO user (Users, Email, Password,Role)VALUES('$name', '$email','$passHash','$rol')";
        $result = mysqli_query($conn, $insert);
        if (!$result) {

            header("Location:../partials/error.php");
        }
        header("Location:../views/registrarProveedor.php");
    }
