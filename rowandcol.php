<?php
$arr = array(array(1,2,3,4), array(5,6,7,8), array(9,10,11,12), array(13,14,15,16));
echo '<table border="1">';

for($i = 0; $i < 4; $i++) {
    $rowsum = 0;
    echo "<tr><td>Row ".($i+1)."</td>";
    for($j = 0; $j < 4; $j++) {
        echo "<td>".$arr[$i][$j]."</td>";
        $rowsum += $arr[$i][$j];
    }
    echo "<td>".$rowsum."</td></tr>";
}

echo "<tr><td>ColSum</td>";
for($j = 0; $j < 4; $j++) {
    $colsum = 0;
    for($i = 0; $i < 4; $i++) {
        $colsum += $arr[$i][$j];
    }
    echo "<td>".$colsum."</td>";
}
echo "</tr></table>";
?>