<?php
//creating a four time table;
$four = 2;
for ($i = 1; $i <=10; $i++) {
    $times = $four * $i;
    echo $four . " times " . $i . " = " . $times . "\n";
}

exit;
$a = 1;
$times = 4;
while ($a <= 20) {
    $result = $times * $a;
    echo $times . "x" . $a . "=" . $result . "\n";
    $a++;
}

?>

<?php

$value = 0;
$divisor = 2;
while ($value <= 49) {
    $value++;
    $result = $divisor * $value;
    $result2 = $result / $divisor;
    echo "{$result} divide {$divisor} = {$result2} \n";
}

?>


<?php

$v = 1;
$d = 2;
while ($v <= 10) {
    $v++;
    $r = $v + $d;
    echo $r;
    // $r2=$r / $d;
    // echo "{$r} divide {$d} = {$r2} \n";
}

?>

<?php

$value = 0;
$divisor = 2;
while ($value <= 49) {
    $value++;
    $result = $divisor * $value;
    $result2 = $result / $divisor;
    echo "{$result} divide {$divisor} = {$result2} \n";
}

?>


<?php
$value = 0;
$divisor = 2;
while ($value <= 50) {
    $value++;
    $result = $value / $divisor;
    if ($value % $divisor == 0) {
        echo "even = " . $value . " / " . $divisor . " = " . $result . "\n";
    } else {
        echo "odd = " . $value . " / " . $divisor . " = " . $result . "\n";
    }
}
?>