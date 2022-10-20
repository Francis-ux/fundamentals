<?php


function operating_system()
{
    echo php_uname();
    echo PHP_OS;
}
$var = operating_system();
echo $var;