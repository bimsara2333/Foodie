<?php
$Email=$_POST['Email'];
$Message=$_POST['Message'];

$host="localhost";
$username="root";
$password='';
$db_name="food";

$conn=mysqli_connect($host, $username, $password, $db_name);
if(mysqli_connect_errno()){
    die("Failed to connect with mysql :".mysqli_connect_errno());

}
$sql="insert into contactus (Email, Message) values('$Email','$Message')";

if (mysqli_query($conn, $sql)){
    echo"<script>alert('successfully login ')</script>";

}
else{"<script>alert('error')</script>";

}

mysqli_close($conn);

?>
