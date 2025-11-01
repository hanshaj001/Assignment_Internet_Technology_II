<!-- Write a PHP program to print prime numbers between 1 and 50. -->
<?php
echo "Prime numbers between 1 and 50 are: ";

for ($num = 2; $num <= 50; $num++) {   
    $isPrime = true;                 

    // check if number has any divisor
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {          
            $isPrime = false;          
            break;                     
        }
    }

    //  print it
    if ($isPrime) {
        echo $num . " ";
    }
}
?>
