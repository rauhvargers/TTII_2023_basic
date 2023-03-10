<?php

ini_set('display_errors', 1);
$message = "This is a demo";

// header("location:https://www.lu.lv");
// exit();

$x = 1/0;

header("Content-Type: text/plain");
echo $message;
