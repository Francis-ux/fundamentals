<?php
function greet($user)
{ //function 
    $main_time = date('g a', strtotime("3 am")); // Using our own version of date
    if ($main_time == '12 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '1 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '2 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '3 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '4 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '5 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '6 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '7 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '8 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '9 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '10 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '11 am') { // Checking the value of the meridian time (am)
        echo "Good morning {$user}";  // the returned result 
    }
    if ($main_time == '12 pm') { // Checking the value of the meridian time (pm)
        echo "Good afternoon {$user}";  // the returned result 
    }
    if ($main_time == '1 pm') { // Checking the value of the meridian time (pm)
        echo "Good afternoon {$user}";  // the returned result 
    }
    if ($main_time == '2 pm') { // Checking the value of the meridian time (pm)
        echo "Good afternoon {$user}";  // the returned result 
    }
    if ($main_time == '3 pm') { // Checking the value of the meridian time (pm)
        echo "Good afternoon {$user}";  // the returned result 
    }
    if ($main_time == '4 pm') { // Checking the value of the meridian time (pm)
        echo "Good evening {$user} ";  // the returned result 
    }
    if ($main_time == '5 pm') { // Checking the value of the meridian time (pm)
        echo "Good evening {$user} ";  // the returned result 
    }
    if ($main_time == '6 pm') { // Checking the value of the meridian time (pm)
        echo "Good evening {$user} ";  // the returned result 
    }
    if ($main_time == '7 pm') { // Checking the value of the meridian time (pm)
        echo "Good evening {$user} ";  // the returned result 
    }
    if ($main_time == '8 pm') { // Checking the value of the meridian time (pm)
        echo "Good night {$user} ";  // the returned result 
    }
}
echo greet('francis'); // final returned result 