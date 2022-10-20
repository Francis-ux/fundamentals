<?php
// $number = [];
// for ($i = 0; $i < 50; $i++) {
//     $number[$i] = $i;
// }
// foreach ($number as $key => $value) {
//     if ($key % 2 == 0 && $key != 0) {
//         echo $value . ",";
//     }
// }

// exit;
function division()
{
    $numbers = array();
    for ($i = 50; $i >= 0; $i--) {
        $numbers[$i] = $i;
    }
    foreach ($numbers as $value) {
        if ($value % 2 == 0 && $value != 0) {
            echo $value;
            echo ",";
        }
    }
}
echo division();
