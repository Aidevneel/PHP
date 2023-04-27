<?php

$conn = mysqli_connect("localhost","neel","home1234","school") or die("Conn lost");
$title = $_POST["Title"] ;
$aid = $_POST["AuthorID"];
$sql = "insert into books(Title,AuthorID) values('{$title}',{$aid})";
$result = mysqli_query($conn,$sql) or die("query fail");

    mysqli_close($conn);
 
?>