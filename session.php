<?php
session_start();
$_SESSION['user'] = [];


$_SESSION['user']["username"] = "francis";
$_SESSION['user']["age"] = "age";


var_dump($_SESSION['user']);
