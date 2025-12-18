<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $db_name ="PU";

    // connecting
    $conn = mysqli_connect($servername,$username,$password,$db_name);

    if(!$conn){
        die("Something Error ". mysqli_connect_error());
    }
?>