<?php
    if(isset($_POST['save_data'])){
        setcookie("cookie_username",$_POST['name'],time()+3600);
        setcookie("cookie_password",$_POST['pass'],time()+3600);
    }
    else{
        setcookie("cookie_username","");
        setcookie("cookie_password","");
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
        <input type="text" name="name" id="" placeholder="User name" value="<?php if(isset($_COOKIE['cookie_username'])){ echo $_COOKIE['cookie_username'];} ?>"><br><br>
        <input type="password" name="pass" id="" placeholder="Password" value="<?php if(isset($_COOKIE['cookie_password'])){ echo $_COOKIE['cookie_password'];} ?>"><br><br>
        <label for="">Save your password?</label>
        <input type="checkbox" name="save_data" id=""><br><br>
        <button type="submit" >Login</button><br><br>
        

    </form>
</body>
</html>