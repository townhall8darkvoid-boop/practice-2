<form method="POST">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="Get Table">
</form>

<?php
if ($_POST) {
    $num = $_POST["number"];
    echo "Multiplication Table of $num:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$num X $i = " . ($num * $i) . "<br>";
    }
}
?>