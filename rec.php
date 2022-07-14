<?php
// Write a PHP program to
// draw a rectangle using for loop

$r = 7;
$c = 9;

for ($i = 1; $i <= $r; $i++) {
    for ($j = 1; $j <= $c; $j++) {
        if ($i == 1 || $i == $r || $j == 1 || $j == $c)
            echo "* ";
        else
            echo "  ";
    }
    echo "\n";
}

?>
