<?php
require("dbconnection.php");
$msg="";
if(isset($_POST['btn_save'])){
    $name=$_POST['cust_name'];
    $dob=$_POST['cust_dob'];
    $email=$_POST['cust_email'];
    $username=$_POST['cust_username'];
    $password=$_POST['cust_password'];
    $query="INSERT INTO customer(customer_name,cust_dob,cust_email,cust_username,cust_password) VALUES ('$name','$dob','$email','$username','$password')";

    $exec_query=mysqli_query($connection,$query);
    if($exec_query){
        $msg="data inserted successfully";
    }
    else{
        $msg="error";
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
</head>
<body>
    <!-- <form action="" method="POST"> -->

    <label for="">Name</label>
    <input type="text" name="cust_name" id="_name"><br><br>
    <label for="">date of birth</label>
    <input type="date" name="cust_dob" id="_dob"><br><br>
    <label for="">Email address</label>
    <input type="email" name="cust_email" id="_email"><br><br>
    <label for="">User Name</label>
    <input type="text" name="cust_username" id="_username"><br><br>
    <div id="error_msg"></div><br>
    <label for="">Password</label>
    <input type="password" name="cust_password" id="_pass"><br><br>
    <button type="submit" name="btn_save">save</button>
    <p> <?php  echo $msg?></p>
 

    <!-- </form> -->
    <script>
        $(document).ready(function(){
            $('#_username').keyup(function(){
                var username=$('#_username').val();
                $.ajax({
                    type:"POST",
                    url:"check_username.php",
                    data:{
                        customer_username:username
                    },
                    success:function(response){
                        $('#error_msg').html(response);
                    }//call back function
                })
            })

        });
    </script>
</body>
</html>