<?php

    $host = "localhost:3306"; 
    $username = "root";
    $password = "";
    $dbname = "account";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>