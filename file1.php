<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
    <input type="text" name='somthing'>
    <input type="submit" value='send'>
</form>
<?php 
    
    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
        echo $_REQUEST['somthing'];
    }
    else echo 'you can\'t browse this page another post method';
?>