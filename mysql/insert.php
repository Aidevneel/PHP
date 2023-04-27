<?php

$sn = "localhost";
$un = "neel";
$pw = "home1234";
$dbn = "school";

$conn = mysqli_connect($sn,$un,$pw,$dbn);
$sql1 = "INSERT INTO student(SName,Fav_book) values('Neel','The Power'),('Meet','Fire'),('Heet','Water'),('Jeet','Thunder')";
$sql2 = "INSERT INTO books(Title,AuthorID) values ('The Dragon',41),('The Power',42),('Water',43),('Fire',44),('Thunder',45),('Wind',46),('Sand',47),('Soil',48)";
$sql3 = "INSERT INTO authors values(41,'Hasmukh'),(42,'Amit'),(43,'Vaibhav'),(44,'Rahul'),(45,'Abhinesh'),(46,'Umesh'),(47,'Vedant')";
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);
mysqli_query($conn,$sql3);

echo "success";

$connclose = mysqli_close($conn);

?>