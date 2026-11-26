<?php
$matrix = [
    [1, 2, 3],
    [4, 50, 6],
    [7, 8, 9]
];

$max = $matrix[0][0]; 
foreach ($matrix as $row) {
    foreach ($row as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
}
echo "Максимальный элемент: " . $max;
