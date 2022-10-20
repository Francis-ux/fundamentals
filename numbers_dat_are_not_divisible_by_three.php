<?php
function numbers_dat_are_not_divisible_by_3()
{
    $numbers = [];
    for ($x = 0; $x <= 50; $x++) {
        if ($x % 3 == 1 && $x != 0) {
            array_push($numbers, $x);
        }
    }
    return $numbers;
}
function run_through()
{
    $result = numbers_dat_are_not_divisible_by_3();
    foreach ($result as  $value) {
        echo $value;
        echo ",";
    }
}
echo run_through();