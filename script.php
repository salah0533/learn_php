<?php 
    //$_SERVER["PHP_SELF"];
    //$_SERVER["SERVER_ADDR"];
    //$_SERVER["SERVER_NAME"];
    //$_SERVER["QUERY_STRING"];
    //$_SERVER["HTTP_REFERER"];
    $var_ = $_SERVER["QUERY_STRING"];

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
        echo $var_;
        
        
    ?>
    
</body>
</html>