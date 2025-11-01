<!-- Write a PHP program that accepts a student’s marks and prints the grade according to the following rules using if…elseif…else
90–100: A
75–89: B
60–74: C
40–59: D
Below 40: Fail -->
<?php
$marks = 450;
if($marks>100 || $marks<0)
    echo "Not valid Marks";
elseif($marks<100 && $marks>90)
    echo "A";
elseif($marks<75 && $marks>89)
    echo "B";
elseif ($marks<74 && $marks>60)
    echo "C";
elseif($marks<59 && $marks>40)
    echo "D";
else
    echo"Fail";
?>