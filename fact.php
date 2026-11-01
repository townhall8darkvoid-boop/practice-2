<?php
function calculateFactorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo "Factorial of 5 is: " . calculateFactorial(5);
?>