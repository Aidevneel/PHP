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
    enter data for encrypt <input type="text" id="encode_data">
    <input type="submit" value="encode" id="btn"><br><br>
   
    <p id="table"></p>
    <br>
    <input type="submit" value="decode" id="btn2"><br><br>
   
    <div id="table2"></div>

    <script>
        $(document).ready(function(){
            
            // insert
            $("#btn").on("click",function(e){  
                e.preventDefault();             

                var encode_data = $("#encode_data").val(); 
                  
                $.ajax({
                    url : "encode.php",
                    type : "POST",
                    data : {Title: encode_data},
                    success : function(data){
                      $("#table").html(data);
                    }
                });
            });  

            $(document).on("click","#btn2",function(){
                var decrypt = $(this).data("#table");            
                var decrypt = $("#table").text();                 
                $.ajax({
                    url : "decode.php",
                    type : "POST",
                    data : {Title: decrypt},
                    success : function(data){
                      $("#table2").html(data);
                    }
                });
              }); 
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>