<?php 
    // POST
    $user_name = $_POST['username'];
    $password  = $_POST['password'];


?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
        if(  $_SERVER['REQUEST_METHOD'] == "POST")
        {
            echo "the data is send it with " . $_SERVER['REQUEST_METHOD'] . " request <br>" ;
            echo "your user_name is : " . $user_name . " and your password is ". $password ;
        }else{
            echo 'you can\'t browse this page directly';
            usleep(1000);
            header("location:http://localhost/learn%20php/file1.php");
            die();
        }

    ?>
    
</body>
</html>