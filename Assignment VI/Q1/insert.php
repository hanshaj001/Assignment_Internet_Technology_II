<?php
include('db_conn.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['number'];

    
$sql_insert ="INSERT into record(name,email,phone)
values('$name','$email','$phone_no')";

$result = mysqli_query($conn,$sql_insert);

if($result){
    echo "Data Inserted SuccessFully";
    exit();
}else
    echo "Error while insertig";
exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    
    <form action="" method="POST">
        Name : 
        <input type="text" name="name" required > <br> 

        Email : 
        <input type="email" name="email" required > <br>

        Phone No :
        <input type="text" name="number" required>  <br>

        <input  type="submit" value="Submit" name="submit">

         
    </form>
</body>
</html>