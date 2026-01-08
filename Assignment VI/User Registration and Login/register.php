<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // hash the password
        $hash_password = password_hash($password,PASSWORD_DEFAULT);

        // checking if email is alreay exit
        $check_email_sql = "SELECT * From users where email='$email' and name = '$name'";
        $email_result = mysqli_query($conn,$check_email_sql);

        if(mysqli_num_rows($email_result)>0){
            echo "<p>Email Or UserName Already exit, Please use another email.</p>";
            exit();
        } else{
            $insert_query = "INSERT into users (name,email,password)
            value('$name','$email','$$hash_password')";

            $insert_result = mysqli_query($conn,$insert_query);

            if($insert_query){
                echo "Registered Successfully";
                header("Location: login.php");
                exit();
            } else{
                echo"Something error while Regestering the user";
                exit();
            }
        }
            
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resister</title>
</head>
<body>
    <h2>Register Form</h2>
    <form action=""  method="post">
        Name: <br>
        <input type="text" name="name" id="" required><br>

        Email: <br>
        <input type="email" name="email" id="" required><br>

        Password: <br>
        <input type="password" name="password" id="" required><br>

        <input type="submit" name="submit" value="Register" id="">

    </form>
    <br>
    Already have account ? <a href="login.php"> Log In</a>
</body>
</html>