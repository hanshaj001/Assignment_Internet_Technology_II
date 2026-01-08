<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "login_user";

$conn = mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){
    die("Unable to connect with database");
}
?>