<?php

$limit = $_POST["limit"];
$offset = $_POST["offset"];

$servername = "localhost";
$username = "neel";
$password = "home1234";
$dbname = "school";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from books order by BID limit ? offset ?";
  $stmt = $conn->prepare($sql);

  $conn->exec($sql);
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
}
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>