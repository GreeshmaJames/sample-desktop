<?php
$name = "john";
echo "<p>My name is $name</p>";
define("MESSAGE"," Hello Friends");
echo "<p>I'd like to say".MESSAGE."</p>";
$number = 45;
$calculation = $number * 31 / 97 + 4;
echo "The result of the calculation is ". $calculation ."<br><br>";
$myBool = false;
echo " This statement is true ? ". $myBool ."<br>";
echo $myBool ? "true" : "false";
echo "<br>";
$variablename = "name";
echo $$variablename;
?>