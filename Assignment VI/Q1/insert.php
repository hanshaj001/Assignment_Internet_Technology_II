<?php
include('db_conn.php');

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT into record(first_name,last_name,email,age)
    values('$first_name', '$last_name' , '$email' , '$age' )";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data inserted Successfully";
        exit();
    }else {
        echo"Something Error while Inserting Data";
        exit();
    }

}
?>

<div style="
    background-color: #2c3e50;
    padding: 12px 20px;
    border-radius: 6px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    font-family: Arial, sans-serif;
    font-weight: bold;
">

    <a href="insert.php" style="color: white; text-decoration: none; margin-right: 20px;">Insert</a>
    <a href="display_record.php" style="color: white; text-decoration: none; margin-right: 20px;">Display Record</a>
    <a href="insert.php" style="color: white; text-decoration: none;">Insert</a>

</div>

<br><br><br>

<form action="" method="post">
    FirstName : <br>
    <input type="text" name="first_name"> <br><br>
    LastName : <br>
    <input type="text" name="last_name" id=""> <br><br>
    Email :<br>
    <input type="email" name="email" id=""> <br><br>
    Age :<br>
    <input type="number" name="age" id=""> <br><br>

    <input type="submit" name="submit" value="Submit">

</form>