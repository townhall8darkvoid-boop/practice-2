<?php
function numToWords($num) {
    $u = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
    $t = ['', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
    $s = ['eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];

    if ($num < 10) return $u[$num];
    if ($num > 10 && $num < 20) return $s[$num - 11];
    return $t[(int)($num / 10)] . ' ' . $u[$num % 10];
}

echo "Number 90 in words: " . numToWords(90);
?>