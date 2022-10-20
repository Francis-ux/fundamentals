<?php
// $gender = "female";
// if ($gender == "female") {
//     echo "yes it is a female";
// } else {
//     echo "no it is a boy" . "\n";
// }

// echo pow(2,4) . "\n";  

// echo round(5.4);

// if ($gender == "female") {
//     echo "yes it is a male";
// } else {
//     echo "no she is not a female" . "\n";
// }
// if ($gender == "male" || $gender == "female") {
//     echo "yes";
// } else {
//     echo "No";
// }
//this is a constant array
// define("Gender", ["The various gender are always like gender", 2, "move"]);
// echo Gender[2];

// //this is normal array
// $array = array("Gender", 1, "The various gender are always like gender");
// echo $array[2];

// $array = ["Gender", 1, "The various gender are always like gender"];
// echo $array[0];
// echo 10 ** 4;
// Modulo is an integer operator, so it converts both the operands to integers before calculating the remainder. So, basically, modulo does integer division and then gives back whatever is left from the dividend. The sign of the value returned by a modulo operation is determined by the sign of the dividend.
// $y = 8;
// $x = 9;
// $c = $y % $x;
// echo $c;

// if ($y < $x) {
//     echo "yes";
// } else {
//     echo "no";
// }
// echo 60 * 15;
// exit;
// $number = 5;
// if ($number % 2 == 1) {
//     echo $number . " is and odd number";
// } else {
//     echo $number . " is an Even number";
// }

// for ($i = 0; $i < 50; $i++) {
//     if ($i % 2 == 1) {
//         echo $i;
//     } else {
//         # code...
//     }
// }
// for ($i = 1; $i <= 100; $i++) {
//     $times = 4;
//     $result = $times * $i;
//     echo $times . " X " . $i . " = " . $result . "\n";
// }
// $a = 1;
// $times = 4;
// while ($a <= 20) {
//     $result = $times * $a;
//     echo $times . "x" . $a . "=" . $result . "\n";
//     $a++;
// }
// $times = 4;
// for ($i = 0; $i <= 40; $i++) {
//     if ($i % 2 == 0 && $i != 0) {
//         $result = $times ** $i;
//         echo $times . " raise to the power of " . $i . " is " . $result . "\n";
//     }
// }
// exit;
// $a = 0;
// $times = 4;
// while ($a <= 40) {
//     if ($a % 2 == 0 && $a != 0) {
//         $result = $times ** $a;
//         echo $times . " raise to the power of " . $a . " is " . $result . "\n";
//     }
//     $a++;
// }

// define("cars", [1, 2, 3, 4, 5, 6, 7, 8, "Obama", "francis"], true);
// foreach (cars as $key => $value) {
//     if ($value == "Obama") {
//         echo "Oops we don't accept bad student";
//         exit;
//     } else {
//         echo $value;
//         echo ",";
//     }
// }
// exit;

//learnt on how to loop array and access array using the key
// $array = [1, 2, 3, 4, 5, 6, 7, 8, "obama", "francis"];
// for ($index = 0; $index < count($array); $index++) {
//     echo $array[$index] . ",";
// }

//while loop
// $index = 0;
// while ($index < count($array)) {
//     echo $array[$index] . ",";
//     $index++;
// }
// $brain = "";
// if ("student in nigeria brain" == empty($brain)) {
//     session_destroy();
// } else {
//     die($brain);
// }
// for ($i = 10; $i <= 70; $i++) {
//     echo $i . ",";
// }
// exit;
// $min = min(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,  20, 13, 14, 15, 16, 17, 18, 19, 1,);
// echo $min;
// exit;
// foreach (range(10, 70) as $key => $value) {
//     echo $value . ",";
// }
// min();
// pow();
// is_string();
// is_integer();
// echo cos(56);
// echo sin(67);
// echo tan(67);

//creating a function that calculate total number of an array;
// function count1()
// {
//     $number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
//     $total_number_in_an_array = 0;
//     foreach ($number as $key) {
//         $total_number_in_an_array++;
//     }
//     return $total_number_in_an_array;
// }
// echo count1();
// function add_number()
// {
//     $num1 = 5;
//     $num2 = 6;
//     $result = $num1 + $num2;
//     return $result;
// }
// echo add_number();
// exit;
// //create a function that loop through and array
// function loop()
// {
//     $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 'francis'];
//     foreach ($numbers as $key => $value) {
//         echo $value;
//     }
// }
// loop();
// $i = 0;
// while ($i <= 5) {
//     if ($i % 2 == 0) {
//         echo $i;
//     }
//     $i++;
// }
// exit;
// for ($i = 0; $i <= 200; $i++) {
//     if ($i % 2 == 0) {
//         echo $i . ",";
//     }
// }
// function two_time_table()
// {
//     $two = 2;
//     for ($i = 1; $i <= 50; $i++) {
//         echo $two . " X " . $i . " = " . $two * $i . "\n";
//     }
// }
// two_time_table();

// function count2()
// {
//     $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//     // $total_num_of_an_array = 0;
//     foreach ($array as $key => $value) {
//         echo $value;
//         // $total_num_of_an_array++;
//     }
//     // return $total_num_of_an_array;
// }
// count2();
// $final_answer = [];
// $two = 2;
// for ($i = 0; $i <= 100; $i++) {
//     if ($i % 2 == 0 && $i != 0) {
//         $answer = $i / $two;
//         array_push($final_answer, $answer);
//     }
// }
// foreach ($final_answer as $key => $value) {
//     echo $value .",";
// }
// exit;
// function dived_even_number_by_2()
// {
//     $final_answer = [];
//     $two = 2;
//     for ($i = 0; $i <= 100; $i++) {
//         if ($i % 2 == 0 && $i != 0) {
//             $answer = $i + $two;
//             array_push($final_answer, $answer);
//         }
//     }

//     return $final_answer;
// }
// function run_through()
// {
//     $result = dived_even_number_by_2();
//     foreach ($result as $value) {
//         echo $value;
//     }
// }
// echo run_through();
// function loop_through_number($start, $stop, $by)
// {
//     for ($i = $start; $i < $stop; $i++) {
//         if ($i % $by == $start && $i != 0) {
//            echo $i . ",";
//         }
//     }
// }
// echo loop_through_number(0,100,2);
