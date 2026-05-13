<?php
function connection(){
$host = "localhost";
$user = "root";
$pass = "";
$bd = "alvaroprato";
$connection=mysqli_connect($host, $user, $pass);
mysqli_select_db($connection, $bd);
return $connection;
}
?>
