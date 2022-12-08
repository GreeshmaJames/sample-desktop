<?php

    if(is_numeric($_GET['number']) &&
       $_GET['number'] > 0 &&
       $_GET['number'] == round($_GET['number'], 0)) {
        $theNumber = $_GET['number'];
        $i = 2;
        $isPrime = true;

        while($i < $theNumber / 2) {
            if($theNumber % $i == 0) {
                $isPrime = false;  //woops!  Found a non-prime!
            }

            $i++;
        }//end while

        if($isPrime) {
            echo "<p>" . $theNumber . " is a prime number!</p>";
        }
        else {
            echo "<p>" . $theNumber . " is NOT a prime number!</p>";
        }//end if-else
    }
    else if($_GET) {
        echo "<p>Please enter a positive whole number.</p>";
    }//end if major test
?>

<p>Please enter a whole number.</p>

<form method="GET">
    <input name="number" type="text">
    <input type="submit" value="Go!">
</form>