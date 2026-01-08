<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "Company";

    $conn = mysqli_connect($servername,$username,$password,$db_name);

    if(!$conn){
        die("Unable to Connect With database");
    }
?>