<?php
$matrix = [
    [-10, 21, 5],
    [42, -1, 0],
    [67, 8, 10,]
];
$maxElement = $matrix[0][0];
foreach ($matrix as $row) {
    foreach ($row as $value) {
        if ($value > $maxElement) {
            $maxElement = $value;
        }
    }
}
echo "Максимальный элемент:". $maxElement;
