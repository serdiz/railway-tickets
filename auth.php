<?php

$host = "localhost";
$user = "postgres";
$pass = "nescafe1988";
$db = "data";
$con = pg_connect("host=$host dbname=$db user =$user password=$pass")
 or die ("Could not connect to Server\n");
 $email = $_POST['Email'];
 $pass = $_POST['Pass'];


 $query = "SELECT * FROM reg WHERE email = '$email')";
 $result = pg_query($con, $query);
 if(pg_num_rows($result) != 1) {
   header('Location: 1.html' );

 } else {

 }
 if(!$result) {
   die("SOMETHING IS WRONG");
 }

setcookie('Email', $email, time() + 10000000, "/");


  pg_close($con);
    ?>
