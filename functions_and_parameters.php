<?php
# Using previous Example
/* An algo that divides even numbers from a specific point to 
another by the specified divisor*/
function count_even_values($start, $stop, $by)
{
    $x = $start; // Initialize the start position of the loop
    $results = []; // Initialize the variable to store all results from the loop
    while ($x <= $stop) { // Setting the condition for the loop
        if ($x %  2 == 0) { // Checking the modulus of the number to know if is odd or even
            $result =  $x / $by; // Dividing the even number by the specified parameter/argument
            array_push($results, $result); // Storing the values of even number divided by the specified value
        }
        $x++; // Incrementing the loop count
    }
    return $results; // Returning the result from the function
}
$value = count_even_values(10, 100, 2);

foreach ($value as $item) {
    echo $item;
    echo ",";
}
?>

<?php
function count_numbers($start, $stop, $by = 2)
{
    $y = $start;
    $results = [];
    while ($y <= $stop) {
        if ($y % 2 == 0) {
            $result = $y / 2;
            array_push($results, $result);
        }
        $y++;
    }
    return $results;
}
$value = count_numbers(10, 100, 2);

foreach ($value as $items) {
    echo $items;
    echo ",";
}