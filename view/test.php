<?php
function productOfPrimes($num) {
    $isValid = false;
    for($i = 2; $i <= (int)($num / 2) ; $i++) {
        for($j = $i; $j < (int)($num / 2) ; $j++) {
            echo "i : $i and j : $j";
            echo "<br>";
            if (($i*$j) == $num) {
                echo '<br>';
                echo "$i * $j";
                return  true;

            }
        }
    }
    return $isValid;
}
var_dump(productOfPrimes(4));