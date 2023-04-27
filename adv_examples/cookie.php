<?php
error_reporting(E_NOTICE);
// error_reporting(E_ALL & E_WARNING & E_NOTICE);

setcookie("sshah", 48, time() + 200,"/");
setcookie("sshah", 408, time() + 200,"/");  //modify cookie value
// setcookie("sshah","", time() -(86400 * 30),"/"); //delete cookie

?>
<html>
<body>

<?php
if(!isset($_COOKIE[sshah])) {
    echo "Cookie is not set!";
  } else {
  echo "Cookie Value is: " . $_COOKIE[sshah] . "<br>";
}

if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
  } else {
    echo "Cookies are disabled.";
  }
?>

</body>
</html>