<?php 
    $user = 'ali';
    $age  = 30;
    $arr = "<h1>";
    $arr.="hello word";
    $arr.="</h1>";
    

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
        echo "<h1 class=\"style\">user ".$user." age:$age</h1>";
    ?>
    <h1><?php echo 'from php '.$arr ?></h1>
</body>
</html>