<?php
    $servername = "localhost";
    $username = "phpuser";
    $password = "phpuserpwd";

    $conn = mysqli_connect($servername,$username,$password);

    if(!conn){
        die("Connection failed" .mysqli_connect_error);
    }
    echo "Connected succesfully";
?>