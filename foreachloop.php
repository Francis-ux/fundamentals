<?php
// $numbers = array(0,1,2,3,4,5,6,7,8,9,10);
// $numbers = array();
// for ($i = 50; $i >= 0; $i--) {
//     $numbers[$i] = $i;
// }
// foreach ($numbers as $value) {
//     if ($value % 2 == 0 && $value != 0) {
//         echo $value;
//         echo ",";
//     }
// }

$numbers = [];
$a = 0;
while ($a <= 50) {
    array_push($numbers, $a);
    $a++;
}

for ($i = 0; $i < count($numbers); $i++) {
    if ($i % 2 == 0 && $i != 0) {
        echo  $numbers[$i] . ",";
    }
}
