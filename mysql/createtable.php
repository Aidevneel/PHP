<?php

$sn = "localhost";
$un = "neel";
$pw = "home1234";
$dbn = "school";

$conn = mysqli_connect($sn,$un,$pw,$dbn);
$sql1 = "CREATE TABLE student(Enroll int primary key auto_increment,SName varchar(20),Fav_book varchar(20))";
$sql2 = "CREATE TABLE books(BID int primary key auto_increment,Title varchar(20),AuthorID int(3))";
$sql3 = "CREATE TABLE authors(AID int(3),AName varchar(20))";
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);
mysqli_query($conn,$sql3);

echo "success";

$connclose = mysqli_close($conn);

?>