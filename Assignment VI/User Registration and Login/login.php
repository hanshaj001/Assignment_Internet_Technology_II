<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        $sql = "SELECT * from users where name = '$name'";

        $result = mysqli_query($conn,$sql);

        // check there is only one user
        if(mysqli_num_rows($result)==1){
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>
    <h2>Login form</h2>
    <form action="" method="post">
        UserName : <br>
        <input type="text" name="name" id=""> <br>
        Password : <br>
        <input type="password" name="password" id=""> <br>

        <input type="submit" name="submit" id="" value="Login">
      
    </form>
</body>
</html>