<?php
// $name = "James";
// $wife = null;
// $children = ["Peter", "John", "James"];
// # The unset variables removes the existence of a variable
// unset($name);

// print(isset($children[0]));

// if (isset($wife)) {
//     echo "wife is set";
// } else {
//     echo "wife is not set";
// }

// # The isset function helps us check if a variable is set or not
// if (isset($name)) {
//     print("Name is set");
// } else {
//     print("Name is not set");
// }

// # Checking if a variables has an empty value
// // using the empty() function

// if (empty($name)) {
//     print "Name is empty";
// } else {
//     print "Name is not empty";
// }
// condition that checks if array is set 
$array = ["francis computer", 59, "is a computer", "for me"];
// foreach ($array as  $value) {
//     echo $value;
// }
// // exit;
if (isset($array)) {
    echo "array is set";
} else {
    echo "array is not set";
}