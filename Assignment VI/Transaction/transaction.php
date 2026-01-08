<?php
    include 'db_conn.php';

    echo"<h2>Example of Transaction.</h2>";
    // statting transaction 
    mysqli_begin_transaction($conn);

    try{
        // sql 1
        $debit_sql = "UPDATE  accounts set balance = balance-10 where id=1";
        if(!mysqli_query($conn,$debit_sql)){
            throw new Exception("Error while debit : ".mysqli_error($conn));
        }

        // sql 2
        $credit_sql = "UPDATE  accounts set balance = balance + 2500 where id = 2";
        if(!mysqli_query($conn,$credit_sql)){
            throw new Exception("Error while credit : " .mysqli_error($conn));
        }
         // if all successed
         mysqli_commit($conn);
         echo"<p style ='color:green';>Transaction Successed </p>";
    }catch(Exception $e){
        mysqli_rollback($conn);
         echo"<p style ='color:red';>Transaction Failed ". $e->getMessage(). "</p>" ;
    }finally{
        mysqli_close($conn);
    }
?>