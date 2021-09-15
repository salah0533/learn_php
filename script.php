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
    //loop
    //[ foreach( array as valeu ){}]
    //[ foreach( array as key=>value )]
    /*[while() 
        endwhile]
    endwhile */    
    //[for(){}]
    //[do{}while()]
    $arr=array(1=>2,3=>4);
    foreach($arr as $key => $val){
        echo $key."=>".$val;
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
    
</body>
</html>