<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    Title <input type="text" id="bookname">
    Authorid <input type="text" id="authorid">
    <input type="submit" value="insert" id="btn"><br><br>
    <img src = "pencil-square.svg" alt="My Happy SVG"/>
    
    <div id="table"></div>

    <script>
        $(document).ready(function(){
            //show
            $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    success : function(data){
                        $("#table").html(data);
                    }
                });

            //insert
            $("#btn").on("click",function(e){  
                e.preventDefault();             

                var bookname = $("#bookname").val(); 
                var authorid = $("#authorid").val();       
                $.ajax({
                    url : "send_data_ajax2.php",
                    type : "POST",
                    data : {Title: bookname, AuthorID : authorid},
                    success : function(data){
                    load();
                    }
                });
            //show after insert
                $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    success : function(data){
                        $("#table").html(data);
                    }
                });
            });
            
            //delete
            $(document).on("click","#delete",function(){
                var id = $(this).data("id");
                $.ajax({
                    url : "ajax_delete.php",
                    type : "POST",
                    data : {BID: id},
                    success : function(data){
                        $("#p").html(data);
                    }
                });
                //show after delete
                $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    success : function(data){
                        $("#table").html(data);
                    }
                });
            })   
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>