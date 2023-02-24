<?php

if(isset($_POST['submit'])){

    $cname = $_POST['name'];
    $cemail = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

$host="localhost";
$username="root";
$passwords='';
$db_name="food";

$conn=mysqli_connect($host, $username, $passwords, $db_name);
if(mysqli_connect_errno()){
    die("Failed to connect with mysql :".mysqli_connect_errno());

}

    if($Password == $cPassword){
        $sql = "SELECT * FROM customers WHERE email = '$cemail'";
        $result = mysqli_query($conn, $sql);
       if($result->num_rows>0){
           echo"<script>alert('The E-mail is already existing.')
           </script>";
       }else{
           $sql="INSERT INTO customers (cname,email,passwords,cpasswords)
           VALUES('$name','$email','$password','$cpassword')";

           $result=mysqli_query($conn,$sql);
           header('location:../html/Login.html'); 
           if($result){
               echo",<script>alert('Registration completed')
               
            }
               </script>";
           }else{
               echo"<script>alert('something went wrong')
               </script>";
           }
       }
       }else{
           echo"<script>alert('Password does not match..')
           </script>";
       }
    }

    ?>
