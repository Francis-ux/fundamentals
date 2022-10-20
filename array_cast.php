<?php

$a = "x";

var_dump((array)$a);

$array = ['a' => 1, 2, 3, 4 => null];
var_dump(array_key_exists(4, $array));
var_dump(isset($array[4]));
