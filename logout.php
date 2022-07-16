<?php
    require('dbconnection.php');
    $_SESSION['user_id']=NULL;
    session_destroy();
    header('location:login.php');

?>