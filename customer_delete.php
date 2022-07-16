<?php
require('dbconnection.php');
$msg="";
$customerid=$_GET['id'];
// echo $customerid;
$sql="DELETE FROM customer WHERE customer_id='$customerid'";
$exec_query=mysqli_query($connection,$sql);
if($exec_query){

    header('loaction:customer_display.php');
    
}
else{
    $msg="error";
}
echo $msg;
?>