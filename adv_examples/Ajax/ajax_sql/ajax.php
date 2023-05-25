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

<table id="table" border="1"  width="100%" cellspacing="0" cellpadding="10px" >
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>
<td>1001</td>
<td>Neel</td>
</table>
<h1 id="id">Clock here to load ajax</h1>

<script>

    $(document).ready(function(){
        $("#table").hide();
        $("#id").on("click",function(e){
            $("#table").show();
            $.ajax({
                url : "ajax_load.php",
                type : "POST",
                success : function(data){
                    $("#table").html(data);
                }
            });
            $("#id").hide();
        });
       
    });

</script>


</body>
</html>