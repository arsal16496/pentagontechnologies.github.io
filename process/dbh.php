<?php

$servername = "main";
$dBUsername = "root";
$dbPassword = "";
$dBName = "database_customer";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>