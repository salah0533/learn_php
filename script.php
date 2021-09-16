<?php 
    //include and require include give you warning so script after include is run normaly
    //require give error so secript is stoped
    include 'file1.php';
    echo $cline1;
    //include once if file is nclude it in this page so not includ it if not include  it 
    // to avoid multi include for same file 
    include_once "file1.php";
    //require_once
    require_once "file1.php";

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
    
    ?>
    
</body>
</html>