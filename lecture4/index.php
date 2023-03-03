<?php

$example = "yes";

if ($example ==  "yes") {
    $output = "good output";
} else {
    $output = "bad output";
}

//setcookie("testcookie", "testvalue", time()+1000, "/", "", false, true);
//$_COOKIE["testcookie"] = "testvalue";

session_start();

$_SESSION["test"]  = "asdsdfds";
$_SESSION["test2"]  = " qweqwe";
$_SESSION["test3"] = [1,2,3,"bingo"];

include("view.php");