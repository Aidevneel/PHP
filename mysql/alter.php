<?php

$sn = "localhost";
$un = "neel";
$pw = "home1234";
$dbn = "school";

$conn = mysqli_connect($sn,$un,$pw,$dbn);
$sql1 = "ALTER TABLE student ADD BloodGroup varchar(3)";
$sql3 = "ALTER TABLE authors ADD Phone int(10)";
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql3);

echo "success";

$connclose = mysqli_close($conn);

?>