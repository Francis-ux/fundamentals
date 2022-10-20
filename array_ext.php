<pre>
<?php

$array = [1, 2, 3, 4, 50 => 5, 6, 7, 8 => null];
array_shift($array); //remove or shift element from the beginning of an array
array_pop($array); //remove or pop element from the end of an array


unset($array[1], $array[2]); // destroy element in a array

print_r($array);

// array_pop();
?>
</pre>