<?php 
    $user = 'ali';
    $age  = 30;

    $arr= array(1=>4);
    class sol{
        function s(){
            echo "<br>" . 1;
        }
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
        echo "<h1 class=\"style\">user ".gettype($user)." age:" . gettype($age) . "</h1>";
    ?>
    <h1><?php echo 'arr :  ' ?></h1>
    <?php echo  var_dump($arr);
    $ob=new sol();
    $ob->s() ?>
</body>
</html>