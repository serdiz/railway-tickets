<?php
$host = "localhost";
$user = "postgres";
$pass = "nescafe1988";
$db = "data";
$con = pg_connect("host=$host dbname=$db user =$user password=$pass")
 or die ("Could not connect to Server\n");
if(!$con){
  echo "Error : unable to open Database\n";

}else {
  $first = $_POST['Firstname'];
  $last = $_POST['Lastname'];
  $email = $_POST['Email'];
  $pass = $_POST['Pass'];

  $query = "INSERT INTO reg (first, last, email, pass) VALUES ('$first','$last',
'$email', '$pass')";
  $result =  pg_query($con, $query);
  header('Location: 1.html' );
     setcookie('Email', $email['Email'], time() + 10000000, "/");
}
pg_close($con);


?>
