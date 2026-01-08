<?php
include('db_conn.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    $sql = "INSERT into employees (name,email,salary)
    values('$name','$email','$salary')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data inserted Successfully";
        exit();
    } else
        echo "Something Error";
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
    <form action="" method="post">
        Name : <br>
        <input type="text" name="name" id=""><br><br>
        Email : <br>
        <input type="email" name="email" id=""><br><br>
        Salary : <br>
        <input type="number" name="salary" id=""><br><br>
     
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>
</body>
</html>