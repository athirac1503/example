<?php
require('dbconnection.php');
$exec_query=mysqli_query($connection,"SELECT * FROM customer_profile");
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
    <table border=1>
        <tr>
            <th>Name</th>
            <th>Profile picture</th>    
        </tr>
        <?php
            while($row=mysqli_fetch_array($exec_query)){  
        ?>
        <tr>
            <td><?php echo $row[1]; ?></td>
            <td><img src="<?php echo $row[2]; ?>" alt="" height="200px" width="200px"></td>
        </tr>
         <?php
            }
         ?>
        
    </table>
    <tbody>

    </tbody>
</body>
</html>