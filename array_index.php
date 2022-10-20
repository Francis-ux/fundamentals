<?php
$programming_languages = ['PHP', 'JAVA', 'CSS'];

$programming_languages[2] = "PYTHON"; //modifying the array

$programming_languages[3] = "C++";

echo "<pre>";
print_r($programming_languages);
echo "</pre>";
echo  "<br/>";

$programming_languages[] = "NODE JS"; //add to the array without array push

echo "<pre>";
print_r($programming_languages);
echo "</pre>";
echo  "<br/>";

array_push($programming_languages,"HTML","CSS","BOOTSTRAP");

echo "<pre>";
print_r($programming_languages);
echo "</pre>";
