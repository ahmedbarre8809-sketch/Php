<?php
$a = 8;
$b = 12;

$max = ($a > $b) ? $a : $b;

while (true) {
    if ($max % $a == 0 && $max % $b == 0) {
        $lcm = $max;
        break;
    }
    $max++;
}

echo "LCM of $a and $b is: " . $lcm;
?>