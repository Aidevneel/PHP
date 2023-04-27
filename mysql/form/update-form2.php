<?php

$enroll = $_POST['enroll'];
$stun = $_POST['sn'];
$fb = $_POST['fb'];
$bg = $_POST['bg'];

$sn = "localhost";
$un = "neel" ;
$pw = "home1234";
$dbn = "school";
$conn = mysqli_connect($sn,$un,$pw,$dbn);

$sql1 = "UPDATE student SET SName = '{$stun}',Fav_book = '{$fb}',BloodGroup = '{$bg}' WHERE Enroll = {$enroll}";
$result = mysqli_query($conn,$sql1);

header("Location: http://localhost/php/php-mysql/form/index.php");

mysqli_close($conn);

?>