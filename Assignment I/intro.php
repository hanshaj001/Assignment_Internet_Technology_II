<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <form action="intro.php" method="post">

    <label for="name">Enter Your name :
        <input type="text" name="name" id="name">
    </label> <br> <br>

    <label for="name">Enter Your age :
        <input type="text" name="age" id="age">
    </label> <br><br>

    <label for="name">Enter Your program :
        <input type="text" name="program" id="program">
    </label><br><br>

    <input type="submit">
   </form>

   <!-- php  -->

   <?php 

   $name = $_POST["name"];
   $age = $_POST["age"];
   $program = $_POST["program"];

   echo "<br><b> My name is $name, I am $age years old. I am Studying $program</b>"

   ?>
</body>
</html>