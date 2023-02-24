<?php

session_start();

$servername="localhost";
$username="root";
$passwords='';
$db_name="food";

$conn = mysqli_connect($servername, $username, $passwords, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["pass"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["user"] = mysqli_fetch_assoc($result);

        header("Location: home.php");
        exit();
    } else {

        $error = "Invalid username or password";
    }
}
mysqli_close($conn);
?>