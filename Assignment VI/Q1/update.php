<?php
include('db_conn.php');
if(isset($_GET['student_id'])){
    $u_student_id = $_GET['student_id'];
    $sql = "SELECT * FROM record where student_id = $u_student_id";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);
}
?> 

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $update_sql = "UPDATE record set first_name = '$first_name' , last_name = '$last_name' , email = '$email' ,
    age = $age  where student_id = $u_student_id";

    $update_result = mysqli_query($conn,$update_sql);

    if($update_result) {
        echo "Updated SuccessFully";
        header("Location: display_record.php");

        exit();
    
    }else{
        echo "Something Error whil" . mysqli_errno($conn);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
</head>
<body>
    <form action="" method="post">
    FirstName : <br>
    <input type="text" name="first_name" value="<?php echo $row['first_name'];?>"> <br><br>
    LastName : <br>
    <input type="text" name="last_name" value="<?php echo $row['last_name'];?>"> <br><br>
    Email :<br>
    <input type="email" name="email" value="<?php echo $row['email'];?>"> <br><br>
    Age :<br>
    <input type="number" name="age" value="<?php echo $row['age'];?>"> <br><br>

    <input type="submit" name="submit" value="Submit">

</body>
</html>