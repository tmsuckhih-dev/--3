<?php
$users = [
    ["name" => "Ivan", "age" => 25],
    ["name" => "Petr", "age" => 17],
    ["name" => "Olga", "age" => 30]
];

$sum = 0;
foreach ($users as $user) {
    $sum += $user['age'];
}

$average = $sum / count($users);
echo "Средний возраст: " . $average;
