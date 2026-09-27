<?php

$a = 2;
$b = 3;

if ($a > $b)
    echo "$a is greater than $b";

$marks = 48;

if ($marks >= 50)
    echo "Pass";
else
    echo "Not pass";

$marks = 87;

if ($marks >= 90)
    echo "Excellent";
elseif ($marks >= 80)
    echo "Very good";
elseif ($marks >= 50)
    echo "minimal pass";
else
    echo "not pass";

$page = "Home";

switch ($page) {
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You selected About";
        break;
    case "News":
        echo "You selected News";
        break;
    case "Login":
        echo "You selected Login";
        break;
}

$i = 1;

while ($i <= 15) {
    echo "$i, ";
    $i++;
}

for ($count = 1; $count <= 12; ++$count)
    echo "$count times 12 is " . $count * 12 . "<br>";

?>