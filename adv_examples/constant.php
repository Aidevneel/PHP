<?php
define("pi", 3.14);
echo pi;
echo "<br>"."constant var dont need $ sign and they are global var, value can not be changed or reassign var, they are case sensitive";
echo "<br>"."give true parameter for case insensitive";
define("test", 3.14,true);
echo TEST;
?>