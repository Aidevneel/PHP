<?php

$json = file_get_contents('php://input');

$data = json_decode($json);
$search = $data->search;

$conn = mysqli_connect("localhost","neel","home1234","school") or die("conn lost");
$sql = "select * from books where Title like '%{$search}%';";

$result = mysqli_query($conn,$sql) or die("query fail");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);

?>