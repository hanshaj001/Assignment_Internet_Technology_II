<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>

    <form action="operators.php" method="post">
        Enter First Number : 
        <input type="number" name="num1" id="num1">
        <br>

        Enter second Number : 
        <input type="number" name="num2" id="num2">
        <br>

        <input type="submit" value="calculate">
    </form>

    <?php
    // operators 
    // only runs when user will click submit 
    // this is used because there will be Error if any value is not passeed so .

    if($_SERVER["REQUEST_METHOD"]== "POST"){

  
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo "<br>Entered Numbers : $num1 , $num2";
    echo "<br>Addition :".($num1 + $num2);
    echo "<br>Sub :".($num1 - $num2);
    echo "<br>Mul :".($num1 * $num2);
    echo "<br>Divide :".($num1 / $num2);
    echo "<br>Modulus :".($num1 % $num2);

    echo"<br><b>Assignment Operators </b>";
    echo"<br><b>Operation Doing from entered First Number </b>";

    echo "<br>+=: ".($num1+=1);
    echo "<br>-=: ".($num1-=1);
    echo "<br>*=: ".($num1*=1);
    echo "<br>/=: ".($num1/=1);
    echo "<br>%=: ".($num1%=1);
      }
    ?>
</body>
</html>