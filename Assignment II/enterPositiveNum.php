<?php
// Creating an array
$numbers = array();

for ($i = 1; $i <= 10; $i++) {

    echo "Enter number $i:   , ";
    $num = (int)readline();

    if ($num < 0) {
        echo "Negative number entered. Stopping...\n";
        break;
    }

    $numbers[] = $num; // store number
}

// Display entered numbers
echo "<br>You entered: ";
foreach ($numbers as $numm) {
    echo $numm . " ";
}
?>
