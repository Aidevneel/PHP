<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
Title
<input type="text" id="bookname">
Authorid
<input type="text" id="authorid">
<input type="submit" value="insert" id="btn">


<table id="table" border="1"  width="100%" cellspacing="0" cellpadding="10px" >
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>
<td>1001</td>
<td>Neel</td>
</table>


<script>

    $(document).ready(function(){
        $.ajax({
                url : "ajax_load.php",
                type : "POST",
                success : function(data){
                    $("#table").html(data);
                }
            });

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
            
            $.ajax({
                url : "ajax_load.php",
                type : "POST",
                success : function(data){
                    $("#table").html(data);
                }
            });
        });
       
    });

</script>


</body>
</html>