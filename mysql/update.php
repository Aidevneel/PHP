<?php

$sn = "localhost";
$un = "neel";
$pw = "home1234";
$dbn = "school";

$conn = mysqli_connect($sn,$un,$pw,$dbn);
$sql1 = "UPDATE authors SET AName = 'Suresh' , Phone = 568945621 WHERE AID = 47 ";
mysqli_query($conn,$sql1);

echo "success";

$connclose = mysqli_close($conn);

?>