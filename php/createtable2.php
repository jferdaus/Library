<?php
$conn = mysqli_connect("localhost", "root", "", "libraryDB");

$tab = "CREATE TABLE bookInfo(

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
bookname TEXT(30),
bookid VARCHAR(30),
author TEXT(30),
published_year VARCHAR(30),
available_hardcopy TEXT(30)

)" ;

if (mysqli_query($conn, $tab)){
	echo " " ;
}

else {
    echo " " . mysqli_error($conn);
}




?>