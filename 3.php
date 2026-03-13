<?php
$n = [5, 4, 3, 2, 1];
$count = count($n);
$last[0] = $n[$count - 1];
for ($i = 0; $i < $count - 1; $i++) {
    $last[$i + 1] = $n[$i];
}
print_r($last);
