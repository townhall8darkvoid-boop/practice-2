<?php
$txtFiles = glob("*.txt");

foreach ($txtFiles as $file) {
    $newName = preg_replace('/\.txt$/', '.xtx', $file);
    if (rename($file, $newName)) {
        echo "Renamed: $file -> $newName<br>";
    }
}
?>