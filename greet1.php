<?php
//we creating a function that greet user base on time;
function greeting_user($user, $time_format, $time)
{
    if ($time_format >= 0 && $time_format <= 11) {
        echo "Good Morning " . $user . $time_format;
    } elseif ($time_format >= 12 && $time_format <= 16) {
        echo "Good Afternoon " . $user . $time_format;
    } elseif ($time_format >= 16 && $time_format <= 22) {
        echo "Good Evening " . $user . $time_format;
    } elseif ($time_format >= 22 && $time_format <= 23) {
        echo "Good night " . $user . $time_format;
    }
}
greeting_user("Francis", date('G'), date("H:i A"));
