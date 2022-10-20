<?php
# Functions can return values that can be stored in variables
function name($name)
{
    return strtoupper($name);
}

$username = name('john');

echo "Hello {$username} \n";



function dob($dob)
{
    return strtolower($dob);
}

$username = dob('EDEKA');

echo "Hello  $username";