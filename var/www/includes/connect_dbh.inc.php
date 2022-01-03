<?php

$dbServername = "kristaps@kristaps-budriks.magebithr.com";
$dbUsername = "root";
$dbPassword = "test12345";
$dbName = "emaillist";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
//$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); // Another way
if (!$conn->connect_error) {
	echo "Savienojums ir izveidots";
}
else {
	die("Savienojums neizdevās: " .$conn->connect_error);
}
?>