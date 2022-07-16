<?php
require("dbconnection.php");
$qurey="SELECT * FROM customer";
$exec_query=mysqli_query($connection,$qurey);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 >
        <tr>
            <th>Name</th>
            <th>DOB</th>
            <th>Email</th>
            <th>User name</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        if(mysqli_num_rows($exec_query)>0){
            while($row=mysqli_fetch_assoc($exec_query)){

            ?>
            <tr>
                <td><?php echo $row['customer_name'] ?></td>
                <td><?php echo $row['cust_dob'] ?></td>
                <td><?php echo $row['cust_email'] ?></td>
                <td><?php echo $row['cust_username'] ?></td>
                <td><?php echo $row['cust_password'] ?></td>
                <td><a href="customer_delete.php?id=<?php echo $row['customer_id']; ?>"onclick="confirm('are you sure,you want to delete');">Delete</a></td>
                <td><a href="customer_update.php?cu_id=<?php echo $row['customer_id']; ?>">Update</a></td>

            </tr>
            <?php

            }
        }
        ?>
        
       
    </table>
</body>
</html>