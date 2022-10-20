<?php
function calculate($adj = null, $opp = null, $hyp = null)

{

    if (empty($adj)) {
        echo "adjacent \n";
        $hypotenuse_value = pow($hyp, 2);
        $opposite_value = pow($opp, 2);
        $answer = $hypotenuse_value - $opposite_value;
        $square = sqrt($answer);
        return $square;
    }
    if (empty($opp)) {
        echo "opposite \n";
        $hypotenuse_value = pow($hyp, 2);
        $adjacent_value = pow($adj, 2);
        $answer = sqrt($hypotenuse_value - $adjacent_value);
        return $answer;
    }
    if (empty($hyp)) {
        echo "hypotenuse \n";
        $adjacent_value = pow($adj, 2);
        $opposite_value = pow($opp, 2);
        $answer = sqrt($adjacent_value + $opposite_value);
        return $answer;
    }
}
echo calculate(8, 6, null);


if (is_int(67)) {
    echo "yes";
} else {
    echo "no";
}
