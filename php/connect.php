<?php

$conn = mysqli_connect("localhost", "root", "");

if (!$conn){
	die("Error in Connection").mysqli_connect_error;
}
else 
echo "connected"; 
echo "<br>";


?>