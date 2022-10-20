<?php

$gender = "Male";

switch ($gender) {
    case 'Male':
        echo "Good afternoon sir";
        break;
    case 'Female':
        echo "Good afternoon Madam";
        break;
    default:
        echo "There is nothing like {$gender}";
        break;
}
