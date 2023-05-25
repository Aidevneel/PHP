<?php

$json = file_get_contents('php://input');

$data = json_decode($json);

$limit = $data->limit;
$offset = $data->offset;

$conn = mysqli_connect("localhost","neel","home1234","school") or die("conn lost");
$sql = "select * from books";
$result = mysqli_query($conn,$sql) or die("query fail");
$total_record = mysqli_num_rows($result);
$total_pages = ceil($total_record / $limit);

$output = $total_pages;

echo json_encode($output);

?>