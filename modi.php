<?php
$items = scandir(".");
$files = [];

foreach ($items as $item) {
    if (is_file($item)) {
        $files[$item] = filemtime($item);
    }
}

arsort($files);
echo "Files sorted by last modification time:<br>";
foreach ($files as $file => $time) {
    echo "$file - Last modified: " . date("F d Y H:i:s", $time) . "<br>";
}
?>