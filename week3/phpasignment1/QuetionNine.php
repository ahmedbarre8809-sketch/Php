<?php
$num = 17;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
}
else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$num is a Prime Number";
}
else {
    echo "$num is a Non-Prime Number";
}
?>