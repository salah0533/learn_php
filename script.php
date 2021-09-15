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
    //arry and dectionay -> arry in php
    //$arr= array(key => value)
    //$arr= array(1,2,3)
    //2\
    $arr[]=1;
    $arr[]=2;
    $arr[]=3;
    //3/
    //spesific order arry
    $arr2[2]=1;
    $arr2[0]=2;
    $arr2[1]=3;
    for($val=0;$val<3;$val++){
        echo $arr2[$val];
    }
    //print complet arry
    print_r($arr2)
    //acces arry inside array use arr[][]
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