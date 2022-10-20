<?php
// $number = [];
// $a = 0;
// while ($a <= 50) {
//     if ($a % 3 == 0 && $a != 0) {
//         array_push($number, $a);
//     }
//     $a++;
// }

// foreach ($number as $key => $value) {
//     echo $value . ",";
// }

// exit;
function count_numbers($start, $stop, $by)
{
    $value = $start;
    $divisor = $by;
    $results = [];
    while ($value <= $stop) {
        if ($value % 3 == 0 && $value != 0) {
            array_push($results, $value);
        }
        $value++;
    }
    return $results;
}
$value = count_numbers(0, 50, 3);

foreach ($value as $items) {
    echo $items;
    echo ",";
}
