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
    /*
    //error control
    //for security resen you should disable error 
    // (@) egnore error
    $file = @fopen("ali.txt","r");
    //castimaze error message
    $file = @fopen("ali.txt","r") or die("this file not found");//if file is found so fine if not will show you this file not found
    */
    // this error include("inc.php");
    (@include("inc.php")) or die("this file not found");
    //control erro connection with database
    $user= 'ahmed';
    $pass= 'pass';
    $localhost='127.0.0.1';
    $db="clint";
    (@mysqli_connect($localhost,$user,$pass,$db)) or die("connection lose");
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