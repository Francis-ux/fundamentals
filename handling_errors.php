<?php

function age($yob)
{
    if (is_int($yob)) {
        return date('Y') - $yob;
    } else {
        throw new Exception("Error Processing Request: Value must be a number");
    }
}


try {
    echo age(18);
} catch (\Exception $error) {
    echo "There was an error processing your request \n";
    echo "This is the reason: \n";
    echo $error->getMessage();
}