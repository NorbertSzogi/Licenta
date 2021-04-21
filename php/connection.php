<?php
$server = "remotemysql.com";
$username = "VWTC3AWLOf";
$password = "Iet2YboCDE";
$dbname = "VWTC3AWLOf";
$port = "3306";

$conn = mysqli_connect($server, $username, $password, $dbname, $port);

if(!$conn){
	die("Connection failed!").mysqli_connect_error();
}
?>