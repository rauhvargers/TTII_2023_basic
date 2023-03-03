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
$_SESSION["test3"] = [1, 2, 3, "bingo"];

$defaultyear = "";
$defaultmonth = "";
$error = "";

if (isset($_GET["year"])) {
    if (is_numeric( $_GET["year"] )) {
        $defaultyear = $_GET["year"];
    } else {
        $error="The value you entered is not a number!";
    }
}



include("view.php");
