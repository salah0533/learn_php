<?php 
    // Get
    $user_name = $_GET['username'];
    $password  = $_GET['password'];


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
        echo "your user_name is : " . $user_name . " and your password is ". $password ;
    ?>
    
</body>
</html>