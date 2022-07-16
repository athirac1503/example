<?php
    require("dbconnection.php");
    if(isset($_POST['btn_login'])){
        $username=$_POST['_username'];
        $password=$_POST['_pass'];
        $exec_query=mysqli_query($connection,"SELECT * FROM customer WHERE cust_username='$username' AND cust_password='$password'");
        if(mysqli_num_rows($exec_query)>0){
            $userdata=mysqli_fetch_array($exec_query);
            session_start();
            $_SESSION['user_id']=$userdata[0];
            header('location:dashboard.php');
        }
        else{
            echo "Login fail";
        }
    }
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
    <form action="" method="POST">
        <label for="">User name</label>
        <input type="text" name="_username" id=""><br><br>
        <label for="">Password</label>
        <input type="text" name="_pass" id=""><br><br>
        <button type="submit" name="btn_login">Login</button>

    </form>
</body>
</html>