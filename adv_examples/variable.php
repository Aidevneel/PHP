<?php


$x = 5; 
echo "global scope, only access outside of function " . $x ."<br>";

function local(){
    $x = 4; 
    echo "Local scope, only access inside of function " . $x ."<br>";
    global $x;  
    echo "global keyword, for access global variable in function also update value of global variable" . $x ."<br>";
    $GLOBALS['x'] = 10;
}
local();
echo '$GLOBALS[index], for store global variable in array ' . $x ."<br>";
echo "<br>";

function mystatic() {
    static $x = 2;
    echo $x;
    $x++;
  }
  
  mystatic();
  echo "<br>";
  mystatic();
  echo "<br>";
  mystatic();
  echo "<br>";
  echo "static keyword is use to keep local variable for further job(it will not delete local variable)"

?>