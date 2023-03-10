<?php
include_once("config.php");

header("Content-Type:text/plain");

$conn = new mysqli(Config::$DBHOST,Config::$DBUSER,Config::$DPASSWORD, Config::$DBNAME);

//var_dump($conn);

$resultset = $conn->query("select * from colors");

//var_dump($resultset);

//$result_row = $resultset->fetch_object();
//var_dump($result_row);
while ($result_row = $resultset->fetch_array()) {
    echo $result_row["id"] . " - " . $result_row["title"] . "\n";
}
