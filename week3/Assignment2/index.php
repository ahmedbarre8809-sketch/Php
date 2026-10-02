<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Assignment 2</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 6px 12px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
<?php
/* ============================================================
   QUESTION 1: One-dimensional array
   ============================================================ */
echo "<h2>Question 1</h2>";

// 1) Declare and initialize
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2) Print all elements
echo "<b>Array elements:</b> ";
foreach ($numbers as $n) {
    echo $n . " ";
}
echo "<br>";

// 3), 4), 5) Totals
$total = 0;
$evenTotal = 0;
$oddTotal = 0;

foreach ($numbers as $n) {
    $total += $n;
    if ($n % 2 == 0) {
        $evenTotal += $n;
    } else {
        $oddTotal += $n;
    }
}
echo "<b>Total of all elements:</b> $total<br>";
echo "<b>Total of even elements:</b> $evenTotal<br>";
echo "<b>Total of odd elements:</b> $oddTotal<br>";

// 6) Minimum element and its positions
$min = min($numbers);
$minPositions = array();
foreach ($numbers as $index => $n) {
    if ($n == $min) {
        $minPositions[] = $index;
    }
}
echo "<b>Minimum element:</b> $min at position(s): " . implode(", ", $minPositions) . "<br>";

// 7) Maximum element and its positions
$max = max($numbers);
$maxPositions = array();
foreach ($numbers as $index => $n) {
    if ($n == $max) {
        $maxPositions[] = $index;
    }
}
echo "<b>Maximum element:</b> $max at position(s): " . implode(", ", $maxPositions) . "<br>";

/* ============================================================
   QUESTION 2: Two-dimensional associative array (colors)
   ============================================================ */
echo "<h2>Question 2</h2>";

$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue")
);

echo "<table>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
foreach ($colors as $rowName => $row) {
    echo "<tr><th>$rowName</th>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";

/* ============================================================
   QUESTION 3: Two-dimensional associative array (students)
   Note: the question repeats the ID CA221, which would overwrite
   a key in PHP, so the third row uses a unique ID (CA225).
   ============================================================ */
echo "<h2>Question 3</h2>";

$students = array(
    "CA221" => array(
        "Name"    => "Mohamed Ahmed Ali",
        "Phone"   => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    "CA223" => array(
        "Name"    => "Ahmed Abdi Jama",
        "Phone"   => "0647223201",
        "Address" => "Taleex, Hodan"
    ),
    "CA225" => array(
        "Name"    => "Amina Nur Adan",
        "Phone"   => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);

echo "<table>";
echo "<tr><th></th><th>Name</th><th>Phone</th><th>Address</th></tr>";
foreach ($students as $id => $info) {
    echo "<tr><th>$id</th>";
    foreach ($info as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>