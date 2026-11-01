<?php
$inputFile = 'input.txt';
$outputFile = 'output.txt';

if (file_exists($inputFile)) {
    $content = file_get_contents($inputFile);
    file_put_contents($outputFile, strrev($content));
    echo "File reversed and written to $outputFile";
} else {
    echo "Input file not found.";
}
?>