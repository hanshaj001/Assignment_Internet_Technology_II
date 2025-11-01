<!-- Write a program that calculates factorial of a number using do-while loop. -->
 
 <?php
 $result = 1;
 $num = 5;
 $i=1;
 do{
    $result=$result*$i;
    $i++;
 }while($i<=$num);

 echo "$result";
 ?>