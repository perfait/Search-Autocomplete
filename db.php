<?php


//db.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autocomplete";



//create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

else{
    // echo 'Connected....';
}

?>