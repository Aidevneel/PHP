<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    
    <title>pagination</title>
  </head>
  <body>

  <div class="container pt-5">
    <div class="row">
        <div class="col align-self-center">

            <div id="table-data">        
            </div>
        </div>
    </div>
  </div>

    <script>
        $(document).ready(function(){
            console.log("hii");

            function loadTable(page){
                $.ajax({
                    url: "ajax-pagination.php",
                    type: "POST",
                    data: {page_no : page},
                    success: function(data){
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();

            //pagination code
            $(document).on("click","#pagination a",function(e){
                e.preventDefault();
                var page_id = $(this).attr("id");
                loadTable(page_id);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>