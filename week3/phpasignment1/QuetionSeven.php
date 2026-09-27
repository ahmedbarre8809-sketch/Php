<?php
$a = 18;
$b = 24;

$x = $a;
$y = $b;

while ($y != 0) {
    $remainder = $x % $y;
    $x = $y;
    $y = $remainder;
}

echo "HCF of $a and $b is: " . $x;
?>