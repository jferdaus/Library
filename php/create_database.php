


<?php

$conn = mysqli_connect("localhost", "root", "");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




// Create database
$sql = "CREATE DATABASE libraryDB";
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo " " . mysqli_error($conn);
}


mysqli_close($conn);
?>
