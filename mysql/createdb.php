<?php

$sn = "localhost";
$un = "neel";
$pw = "home1234";

$conn = mysqli_connect($sn,$un,$pw);
if (! $conn){
    die ("connection fail");
}else{
    echo "connection success<br>";
}

$sql = "CREATE DATABASE schooql";
$result = mysqli_query($conn,$sql);

if (! $result){
    die ("database fail");
}else{
    echo "database created<br>";
}

$connclose = mysqli_close($conn);

if (! $connclose){
    die ("conncetion not close");
}else{
    echo "connection closed";
}

?>