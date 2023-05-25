<?php

$conn = mysqli_connect("localhost","neel","home1234","school") or die("Conn lost");
$id = $_POST["BID"] ;

$sql = "delete from books where BID = '{$id}'";
$result = mysqli_query($conn,$sql) or die("query fail");

mysqli_close($conn);
// echo "deleted";
?>