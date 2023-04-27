<html>
    <body>
        <h1> 
        <?php 
         if(!isset($_COOKIE['user'])){
            echo "cookie is not enable or not found on your browser";
        }else{
            echo "this is cookie which is set on client browser :" . $_COOKIE['user'];
        }
        
        ?>
        </h1>
    </body>
</html>