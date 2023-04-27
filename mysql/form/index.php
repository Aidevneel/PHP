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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-primary" href="./index.php">View</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link active text-primary" href="./insert-form.php">Insert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-primary" href="./update-form3.php">Update</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link active text-primary" href="./delete-form2.php">Delete</a>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<div class="container mt-5 border border-primary">
    <h1 class="text-primary">All Students Data with Authors</h1>
    <?php
    
        $sn = "localhost";
        $un = "neel" ;
        $pw = "home1234";
        $dbn = "school";
        $conn = mysqli_connect($sn,$un,$pw,$dbn);

        $sql1 = "SELECT * FROM student JOIN books JOIN authors where student.Fav_book = books.Title AND books.AuthorID = authors.AID";
        $result = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result)>0){

    ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Enroll No.</th>
      <th scope="col">Student Name</th>
      <th scope="col">Fav Book</th>
      <th scope="col">Book ID</th>
      <th scope="col">Author Name</th>
      <th scope="col">Student Blood Group</th>
      <th scope="col">Modify Student Records</th>
    </tr>
  </thead>
  <tbody>

    <?php
        while($row = mysqli_fetch_assoc($result)){        
    ?>
    <tr>

      <td scope="row">  <?php echo $row['Enroll']; ?> </td>
      <td>  <?php echo $row['SName']; ?></td>
      <td>  <?php echo $row['Fav_book']; ?></td>
      <td>  <?php echo $row['BID']; ?></td>
      <td>  <?php echo $row['AName']; ?></td>
      <td>  <?php echo $row['BloodGroup']; ?></td>
      <td> <a href="update-form.php?id=<?php echo $row['Enroll'];?>" class="btn btn-primary" > Update</a>
      <a href="delete-form.php?id=<?php echo $row['Enroll'];?>" class="btn btn-danger" > Delete</a> </td>
    </tr>

    <?php } ?>

  </tbody>
</table>
<a href="insert-form.php" class="btn btn-success m-2 " > Insert</a>

<?php 
    }else{
        echo "<h1>No record found</h1>";
    }
    mysqli_close($conn);
?>
</div>
</body>
</html>