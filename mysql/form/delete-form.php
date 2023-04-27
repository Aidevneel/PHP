<?php

$enroll = $_GET['id'];

$sn = "localhost";
$un = "neel" ;
$pw = "home1234";
$dbn = "school";
$conn = mysqli_connect($sn,$un,$pw,$dbn);

$sql1 = "DELETE FROM student WHERE Enroll = {$enroll}";
$result = mysqli_query($conn,$sql1);

header("Location: http://localhost/php/php-mysql/form/index.php");

mysqli_close($conn);

?>