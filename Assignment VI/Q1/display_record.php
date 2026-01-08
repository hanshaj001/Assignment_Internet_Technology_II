<?php

include('db_conn.php');

$sql = "SELECT * from record";
$result = mysqli_query($conn,$sql);

?>
<div style="
    background-color: #2c3e50;
    padding: 12px 20px;
    border-radius: 6px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    font-family: Arial, sans-serif;
    font-weight: bold;
">

    <a href="insert.php" style="color: white; text-decoration: none; margin-right: 20px;">Insert</a>
    <a href="display_record.php" style="color: white; text-decoration: none; margin-right: 20px;">Display Record</a>
    <a href="insert.php" style="color: white; text-decoration: none;">Insert</a>

</div>

<br><br><br>




<table border="1" cellspacing="0">

    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Admission Date</th>
        <th colspan="2">Action</th>
    </tr>
    <?php 
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
        
            echo "<tr>";
                echo "<td>" . $row['first_name'] . "</td>" ;
                echo "<td>" . $row['last_name'] . "</td>" ;
                echo "<td>" . $row['email'] . "</td>" ;
                echo "<td>" . $row['age'] . "</td>" ;
                echo "<td>" . $row['admission_date'] . "</td>" ;
                echo "<td>  
                <a href ='delete.php?student_id=" . $row['student_id'] ."'
                onclick= 'return confirm(\"Are You sure want to delete this Student?\");'>| Delete | </td>" ;

                echo "<td> <a href ='update.php?student_id=" . $row['student_id'] ."'
                    onclick ='return confirm(\" Aru sure Want to Edit Details \");'> | Edit |
                     </td>" ;
            echo "</tr>";
        }
    }
    ?>
</table>
<a href=""></a>
