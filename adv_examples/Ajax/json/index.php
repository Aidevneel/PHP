<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    
    <title>json</title>
  </head>
  <body>

  <div class="container pt-5">
    <div class="row">
        <div class="col-12 align-self-center border border-danger mb-5">
            <br>
            <div id="table-data">
            </div>
            <br>
            <div id="pagination">                
            </div>
        </div>
        <div class="col-5 border border-success me-5">
            <div>
            In Active Page Search <input type="text" class="form-control" id="search" placeholder="Search title">
            </div><br>
            
            <div id="aps">                
            </div><br>

        </div>
        <div class="col-5 border border-info">
            <div>
            Search on all data <input type="text" class="form-control" id="searchAll" placeholder="Search title">
            </div><br>
            
            <div id="sad">                
            </div><br>

        </div>
    </div>
  </div>
    <script>

        $(document).ready(function(){

            var obj =   {"limit" : 5, "offset" : 3};
            
            // table
            function loadTable(page){
                obj.pagenum =  page;
                $.ajax({                    
                    url: "mysqli_json.php",
                    type: "POST",
                    data: JSON.stringify(obj),
                    contentType: 'application/json; charset=utf-8',
                    success: function(data){
                        const obj = JSON.parse(data);
                        var output = ``;
                        output += `<table border="1" cellspacing="0" cellpadding="10px">
                                    <tr>
                                    <th>BID</th>
                                    <th>Book Title</th>
                                    <th>AID</th>
                                    </tr>`;

                        for(var i = 0; i < obj.length; i++ ){
                            output += `<tr><td>${obj[i].BID}</td><td>${obj[i].Title}</td><td>${obj[i].AID}</td></tr>`;
                        }

                        output += `</table>`;
                        $("#table-data").html(output);
                    }
                });
            }
            loadTable();

            // pagination
            $.ajax({
                url: "pagination.php",
                type: "POST",
                data: JSON.stringify(obj),
                contentType: 'application/json; charset=utf-8',
                success: function(data){
                    var total_pages = JSON.parse(data);                    
                    var output = ``;
                    output += `<nav id="pagination" aria-label="Page navigation example">
                            <ul class="pagination">`;
                    for(var i = 1; i <= total_pages; i++){                     
                        output += `<li class='page-item'><a class='page-link' id='${i}' value='${i}' href=''>${i}</a></li>`;
                    }
                    output += `</ul></nav>`;
                    $("#pagination").html(output);
                }
            });

            $(document).on("click","#pagination a",function(e){
                e.preventDefault();
                var page_id = $(this).attr("id");
                var page = $(this).parent()
                $('.active').removeClass("active");                
                $(page).addClass("active");            
                loadTable(page_id);
            });

            // searching on active page

            $(document).on("keyup","#search",function(){
                var search_char = $(this).val();
                var page_html = $(".active").html();
                var page = $(page_html).attr("value");
                obj.search =  search_char;
                obj.pagenum =  page;

                $.ajax({                    
                    url: "active_page_search.php",
                    type: "POST",
                    data: JSON.stringify(obj),
                    contentType: 'application/json; charset=utf-8',

                    success: function(data){
                        const obj = JSON.parse(data);
                        var output = ``;
                        output += `<table border="1" cellspacing="0" cellpadding="10px">
                                    <tr>
                                    <th>BID</th>
                                    <th>Book Title</th>
                                    <th>AID</th>
                                    </tr>`;

                        for(var i = 0; i < obj.length; i++ ){
                            output += `<tr><td>${obj[i].BID}</td><td>${obj[i].Title}</td><td>${obj[i].AID}</td></tr>`;
                        }

                        output += `</table>`;
                        $("#aps").html(output);
                    }
                });
            });


            // searching on all data

            $(document).on("keyup","#searchAll",function(){
                var search_char = $(this).val();   
                obj.search =  search_char;

                $.ajax({                    
                    url: "searchAll.php",
                    type: "POST",
                    data: JSON.stringify(obj),
                    contentType: 'application/json; charset=utf-8',

                    success: function(data){
                        const obj = JSON.parse(data);
                        var output = ``;
                        output += `<table border="1" cellspacing="0" cellpadding="10px">
                                    <tr>
                                    <th>BID</th>
                                    <th>Book Title</th>
                                    <th>AID</th>
                                    </tr>`;

                        for(var i = 0; i < obj.length; i++ ){
                            output += `<tr><td>${obj[i].BID}</td><td>${obj[i].Title}</td><td>${obj[i].AID}</td></tr>`;
                        }

                        output += `</table>`;
                        $("#sad").html(output);
                    }
                });
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>