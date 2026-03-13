<?php
$users = [
    ["name" => "Ivan", "age" => 25],
    ["name" => "Petr", "age" => 17],
    ["name" => "Olga", "age" => 30]
];
$N = 0;
foreach ($users as $user) {
    $N += $user['age'];
}
echo "Средний возрас:" . $N / count($users);
