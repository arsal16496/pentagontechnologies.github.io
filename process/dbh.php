<?php

$servername = "main";
$dBUsername = "arsal16496";
$dbPassword = "";
$dBName = "370projects";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>