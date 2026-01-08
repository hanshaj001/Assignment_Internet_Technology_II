<?php
include('db_conn.php');

$sql = "SELECT * from employees";

$result = mysqli_query($conn,$sql);

?>
<table border="1" cellpadding="0">
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Salary</th>
        <th>Join Date</th>
    </tr>

    <?php
    if(mysqli_num_rows($result)>0){
          $sn = 1;
        while($row = mysqli_fetch_assoc($result)){

            echo"<tr>";
            echo"<td>". $sn."</td>";
            echo"<td>". $row['name']."</td>";
            echo"<td>". $row['email']."</td>";
            echo"<td>". $row['salary']."</td>";
            echo"<td>". $row['join_date']."</td>";
            echo"</tr>";
            $sn++;
        }
    }
    ?>

</table>