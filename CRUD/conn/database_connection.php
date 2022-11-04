<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        echo "Not able to connect with database";
    }
?>