<?php 
    //global var 
    $name= 'ali';


    function add(){
        $name = 'ahmed';
        echo 'local name' . $name;
        echo 'global name ' . $GLOBALS['name'];
    }
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
        add();
    ?>
    
</body>
</html>