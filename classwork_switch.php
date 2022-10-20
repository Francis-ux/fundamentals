<?php
function my_number()
{
    $number = range(1, 20);
    foreach ($number as $numbers) {
        if ($numbers % 2 == 0 && $numbers != 0) {
            if ($numbers % 5 == 0) {
                echo ": Coops will don't take in any number divisible by 5 here" . "\n";
                break;
            }
            echo $numbers;
            echo ",";
        }
    }
}
echo my_number();



















// while ($index < count($numbers)) {
//     if ($numbers[$index] == 5) {
//         echo "Ooops, we dont accept 5 as a value";
//         break;
//     } else {
//         echo $numbers[$index] . ',';
//         $index++;
//     }
// }