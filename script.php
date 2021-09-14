<?php 
    $user = 'ali';
    $age  = 30;

    $arr= array(1=>4);
    class sol{
        function s(){
            echo "hello";
        }
    }
    $so = new sol();
    define("BROSER","chrome",FALSE);
    $i=50;
    $i*=220;
    $i.=' $';
    echo $i;
    
    //(.) to concatinat strign the return val is string ;
    //(+) is just for number;
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
    
</body>
</html>