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
    <h1 class="text-primary">Insert into Stundent Table</h1>
    <form action="insert-form2.php" method="post">
        <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" class="form-control" name="sn" />    
        </div>
        <div class="mb-3">
            <label class="form-label">Fav_book</label>
            <input type="text" class="form-control" name="fb" />    
        </div>
        <div class="mb-3">
            <label class="form-label">Blood Group</label>
            <input type="text" class="form-control" name="bg" />    
        </div>
        
        <button type="submit" class="btn btn-primary m-2">Insert</button>
    </form>
</div>

</body>
</html>