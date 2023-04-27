<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container mt-5 border border-primary">
    <?php
    
        $sn = "localhost";
        $un = "neel" ;
        $pw = "home1234";
        $dbn = "school";
        $conn = mysqli_connect($sn,$un,$pw,$dbn);

        $id = $_GET['id'];
        
        $sql1 = "SELECT * FROM student WHERE Enroll = {$id}";
        $result = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

    ?>
    <form action="update-form2.php" method="post">
        <div class="mb-3">
        <b class="display-5">Update Data of <b class="text-primary"><?php echo $row['SName'];?> </b> </b><br>
            <label class="form-label">Student Name</label>
            <input type="hidden" class="form-control" name="enroll" value="<?php echo $row['Enroll']; ?>" /> 
            <input type="text" class="form-control" name="sn" value="<?php echo $row['SName']; ?>" />    
        </div>
        <div class="mb-3">
            <label class="form-label">Fav_book</label>
            <input type="text" class="form-control" name="fb" value="<?php echo $row['Fav_book']; ?> "/>    
        </div>
        <div class="mb-3">
            <label class="form-label">Blood Group</label>
            <input type="text" class="form-control" name="bg" value="<?php echo $row['BloodGroup']; ?>" />    
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary m-2">Update</button>
    </form>
    <?php } ?>
</div>

</body>
</html>