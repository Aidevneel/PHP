<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <table id="table" border="1"  width="100%" cellspacing="0" cellpadding="10px" >
            <tr>
              <th>ID</th>
              <th>Name</th>
            </tr>
            <td>1001</td>
            <td>Neel</td>
          </table>
       </div>
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" onclick="abc(5)" href="#">1</a></li>
        <li class="page-item"><a class="page-link" onclick="abc(10)" href="#">2</a></li>
        <li class="page-item"><a class="page-link" onclick="abc(15)" href="#">3</a></li>        
      </ul>
    </nav>

<script>
$(document).ready(function(){

 
  function abc(e){
    var limit = e;
    var offset = 5;

    $("#table").show();
      $.ajax({
        url : "mysqli.php",
        type : "POST",
        data : {limit: limit, offset : offset},
        success : function(data){
        $("#table").html(data);
        }
      });
    }
  });




    // $(document).ready(function(){
    //   $("#table").hide();
    //   // $("#id").on("click",function(e){
    //   //   var limit = $(this).data("value");
    //   //   var offset = 5;
    //   //   $("#table").show();
    //   //   $.ajax({
    //   //     url : "mysqli.php",
    //   //     type : "POST",
    //   //     data : {limit: limit, offset : offset},
    //   //     success : function(data){
    //   //     $("#table").html(data);
    //   //     }
    //   //   });
    //   //   //$("#id").hide();
    //   // });   

    // });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>