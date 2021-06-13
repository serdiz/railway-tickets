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
  $destination = $_POST['Destination'];
  $id = $_POST['Id'];
  $price = $_POST['Price'];

  $query = "INSERT INTO ticket (destination,id,price) VALUES ('$destination',
    '$id', '$price')";
  $result =  pg_query($con, $query);
  header('Location: 1.1.php' );

}
pg_close($con);


?>
