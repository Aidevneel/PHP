<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$username = $_POST['un'];
$password = $_REQUEST['pw'];

echo "Username is :" . $username;
echo "<br>";
echo "Password is :" . $password;

?>