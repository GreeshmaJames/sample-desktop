<?php
$myArray = array("John","Ed","Sally","Tom");
print_r($myArray);
echo $myArray[2];
echo "<br><br>";

$foodArray = array();

$foodArray[0]="pizza";
$foodArray[1]="burger";
$foodArray[2]="tea";

$foodArray[]="fudge";


print_r($foodArray);

echo "<br><br>";

$languages = array(
    "France" => "French",
    "Germany" => "German",
    "USA" => "English"
);

print_r($languages);
unset($languages["Germany"]);

echo "<br><br>";
print_r($languages);
echo "<br><br>";
$languages["India"] = "Hindi";
print_r($languages);


echo "<br><br>";
echo sizeof($languages);
echo "<hr>";

//challenge solution:
$movies = array("star trek: first contact", "independence day", "Kanthara");
print_r($movies);
echo sizeof($movies);
echo "<hr>";

$students = array("joylin", "divya", "navya", "anusha", "ashwin");
$marks = array(98, 95, 78, 64, 58);
foreach($students as $s) {
    echo "name $s marks $marks[$i]";
    $i=$i+1;
}

?>