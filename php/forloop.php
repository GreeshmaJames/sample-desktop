
<?php
$family = array(" jack", " john", " ellen", " jackson");

foreach($family as $key => $value) {
    $family[$key] = $value . " baugh";
    echo "array item " . $key . " is" . $value . "<br>";
    echo "update: $family[$key]<br>";
}

?>