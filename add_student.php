<?php
    require('dbconnection.php');
    $s_name=$_POST['sname'];
    $s_address=$_POST['saddress'];
    $s_contact=$_POST['scontact'];

    $exec_query=mysqli_query($connection,"INSERT INTO student(student_name,student_address,student_contact)VALUES('$s_name','$s_address','$s_contact')");
    if($exec_query){
        echo "data inserted succesfully";
    }
    else{
        echo "error";
    }

?>