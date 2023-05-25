<?php

$json = file_get_contents('php://input');

$data = json_decode($json);

$limit = $data->limit;

$page = "";

if(isset($data->pagenum)){
    $page = $data->pagenum;
}else{
    $page = 1;
}

$offset =($page - 1) * $limit;

$conn = mysqli_connect("localhost","neel","home1234","school") or die("conn lost");
$sql = "select * from books limit {$offset},{$limit}";
$result = mysqli_query($conn,$sql) or die("query fail");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);

?>