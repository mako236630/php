<?php
$z = "Fizz";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0) {
        echo $z;
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } elseif ($i % 15 == 0) {
        echo "FizzBuzz";
    } else {
        echo $i;
    }

}
 
?>
