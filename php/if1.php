<?php
$user = "Aleena";
if($user=="Aleena") {
    echo "Hello Aleena";
}
else{
    echo "I dont know you";
}
echo "<br><br>";

$age = 19;
if($age>=18) {
    echo "election age in india<br>";

}
else{
    echo "election age in german<br>"; 
}
echo "<br>";
if($age >=18 && $user =="Aleena") {
    echo "Eligible to vote<br>";
}
else{
    echo "sorry, You are not eligible to vote<br>";
}
echo "<hr>";
echo "<br>";

if($user == "rob" || $age>=18) {
    echo "Eligible<br>";
}
else{
    echo "sorry, You are not eligible";
}
echo "<br><br>";

//challenge solution:
if($user == "rob"||$user == "john"||$user == "Aleena") {
    echo "Welcome to the society of awesome people<br>";
}
else{
    echo "sorry, you are not allowed in this society<br>";
}
?>