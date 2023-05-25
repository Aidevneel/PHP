<?php

$conn = mysqli_connect("localhost","neel","home1234","school") or die("conn lost");

$limit_per_page = 10;
$page = "";

if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}else{
    $page = 1;
}

$offset =($page - 1) * $limit_per_page;
$sql = "select * from books limit {$offset},{$limit_per_page}";
$result = mysqli_query($conn,$sql) or die("query fail");
$output = "";
if(mysqli_num_rows($result) > 0){
    
    $output .= '<table border="1" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>BID</th>
                    <th>Book Title</th>
                    <th>AID</th>
                </tr>';
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr><td>{$row['BID']}</td><td>{$row['Title']}</td><td>{$row['AID']}</td></tr>";
    }        
    $output .= "</table>";

    // pagination
    $sql_total = "select * from books";
    $records = mysqli_query($conn,$sql_total) or die("query2 fail");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record / $limit_per_page);
    
    $output .= '<nav id="pagination" aria-label="Page navigation example">
                <ul class="pagination">';

    for($i = 1; $i <= $total_pages; $i++){
        if($i == $page){
            $active = "active";
        }else{
            $active = "";
        }
    $output .= "<li class='page-item {$active}'><a class='page-link' id='{$i}' href=''>{$i}</a></li>";
    }
    $output .='</ul></nav>';
    echo $output;
}else{
    echo " no record";
}

?>