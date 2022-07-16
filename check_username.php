<?php
require('dbconnection.php');
if(isset($_POST['customer_username'])){
    $username=$_POST['customer_username'];
    $exec_query=mysqli_query($connection,"SELECT * FROM customer WHERE cust_username='$username'");
    if(mysqli_num_rows($exec_query)>0){
        echo "<span style='color:red'>user name is not available</span>";
    }
    else{
        echo "<span style='color:green'>user name is available</span>";
 
    }
}

?>