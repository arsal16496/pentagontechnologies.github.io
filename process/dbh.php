<?php

$servername = "main";
$dBUsername = "arsal16496";
$dbPassword = "";
$dBName = "database_admin";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>