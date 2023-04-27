<?php

$cookie_name = "user";
$cookie_value = "neel";

setcookie($cookie_name,$cookie_value,time()+3600,"/")

?>

<html>
    <body>
        <h1> 
        <?php 
        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie is not enable on your browser";
        }else{
            echo "this is cookie which is set on client browser :" . $_COOKIE[$cookie_name];
        }
        
        ?>
        </h1>
    </body>
</html>