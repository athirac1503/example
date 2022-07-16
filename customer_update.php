<?php
require('dbconnection.php');
$msg="";
$cid=$_GET['cu_id'];
$exec_query=mysqli_query($connection,"SELECT * FROM  customer WHERE customer_id='$cid'");
$row=mysqli_fetch_array($exec_query);

if(isset($_POST['btn_update'])){
    $name=$_POST['cust_name'];
    $dob=$_POST['cust_dob'];
    $email=$_POST['cust_email'];
    $username=$_POST['cust_username'];
    $password=$_POST['cust_password'];
    $query="UPDATE customer SET customer_name='$name',cust_dob='$dob',cust_email='$email',cust_username='$username',cust_password='$password' WHERE customer_id='$cid'";
    $exec_query=mysqli_query($connection,$query);
    if($exec_query){
        header('location:customer_display.php');
    }
    else{
        echo "error";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">

<label for="">Name</label>
<input type="text" name="cust_name" value="<?php echo $row['1'] ?>"><br><br>
<label for="">date of birth</label>
<input type="date" name="cust_dob" value="<?php echo $row['2'] ?>"><br><br>
<label for="">Email address</label>
<input type="email" name="cust_email" value="<?php echo $row['3'] ?>"><br><br>
<label for="">User Name</label>
<input type="text" name="cust_username" value="<?php echo $row['4'] ?>"><br><br>
<label for="">Password</label>
<input type="password" name="cust_password" value="<?php echo $row['5'] ?>"><br><br>
<button type="submit" name="btn_update">update</button>
<p> <?php  echo $msg?></p>

</form>
</body>
</html>