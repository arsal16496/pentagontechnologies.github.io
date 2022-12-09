<?php

$servername = "DESKTOP-M82HP5L";
$dBUsername = "root";
$dbPassword = "";
$dBName = "370projects";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>