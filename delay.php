<?php
$delaySeconds = 5;
echo "Execution will be paused for $delaySeconds seconds...\n";
sleep($delaySeconds);
echo "Execution resumed after $delaySeconds seconds.\n";
?>