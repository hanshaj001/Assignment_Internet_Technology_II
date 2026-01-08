<?php
    include('db_conn.php');

    if(isset($_GET['student_id'])){
        $dlt_id = $_GET['student_id'];

        $sql = "DELETE from record where student_id = $dlt_id";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "Deleted Successfully";
            header("Location: display_record.php");
             exit();
        } else 
        echo "SOMETHIG eRROR WHILE DELETEING";
    }
    else
        echo"Invalid Request";
?>