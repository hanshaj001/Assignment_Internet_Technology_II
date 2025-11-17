    <?php
    $favFoods =array("Rice","Roti","Daal","Curry","Meat");

    $number = 1;  
    foreach($favFoods as $food){
        echo $number . ". $food <br>";
        $number ++;
    }

    ?>