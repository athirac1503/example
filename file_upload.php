<?php
require('dbconnection.php');
$msg="";
if(isset($_POST['btn'])){
    $name=$_POST['customer_name'];
    $targetdirectory="images/";
    $targetfile=$targetdirectory.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);
    $exec_query=mysqli_query($connection,"INSERT INTO customer_profile(cust_name,customer_image) VALUES ('$name','$targetfile')");
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
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" name="customer_name" id=""><br><br>
        <label for="">Upload image</label>
        <input type="file" name="image" id=""><br><br>
        <button type="submit"name="btn">Submit</button>
        <p><?php echo $msg ?></p>

   </form> 
</body>
</html>