<?php
include '../conexion/conexion.php';
$conn=mysqli_connect("localhost","root","","bd_login");

$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[Email]' ";

$result = $conn-> query($checkEmail);

$count = mysqli_num_rows($result);

if ($count==1){
    echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>That email is already in our database.</p>
					<p><a href='login.php'>Please login here</a></p>
				</div>";
}else{

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];

    // The password_hash() function convert the password in a hash before send it to the database
    $passHash = password_hash($pass, PASSWORD_DEFAULT);

    // Query to send Name, Email and Password hash to the database
    $query = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$passHash')";

    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success mt-4' role='alert'><h3>Your account has been created.</h3>
		<a class='btn btn-outline-primary' href='login.php' role='button'>Login</a></div>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}