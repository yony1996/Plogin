<?php
include '../conexion/conexion.php';

$email = $_POST['email'];
$conn=mysqli_connect("localhost","root","","bd_login");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Email, Password FROM user WHERE Email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $subject = "Your password for PHP Login";
    $body = "Your password is:" . $row['Password'];

    $headers = 'From: yonyvenegas@gmail.com' . "\r\n" .
        'Reply-To: yonyvenegas@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email, $subject, $body, $headers);

    echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>
				<p>Email was send! Please check your email.</p>
				<p><a class='alert-link' href=login.html>Login</a></p></div>";
} else {
    echo "We are sorry, but that email is not in our data base.";
}
?>
