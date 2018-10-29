<?php
$conn = mysqli_connect("localhost", "root", "", "libraryDB");

$tab = "CREATE TABLE userInfo(

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30),
userid VARCHAR(30),
password TEXT(30),
email VARCHAR(30),
department TEXT(30),
major TEXT(30),
minor TEXT(30)
)" ;

if (mysqli_query($conn, $tab)){
	echo " " ;
}

else {
    echo " " . mysqli_error($conn);
}




?>