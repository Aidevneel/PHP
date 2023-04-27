<?php

if(isset($_FILES['image'])){
    /*   echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    */
    $filename= $_FILES['image']['name'];
    $filesize= $_FILES['image']['size'];
    $file_tmpname= $_FILES['image']['tmp_name'];
    $filetype= $_FILES['image']['type'];

        if(move_uploaded_file($file_tmpname,"uploadimg/".$filename)){
            echo "Successfully uploaded";
        }

}

?>

<html><body>

<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image" /><br><br>
<input type="submit">
</form>

</body></html>