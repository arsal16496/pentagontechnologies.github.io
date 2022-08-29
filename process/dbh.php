<?php

$servername = "main";
$dBUsername = "arsal16496";
$dbPassword = "";
$dBName = "database_customer";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>